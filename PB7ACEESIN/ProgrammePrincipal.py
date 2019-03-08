######################################################
#######	  Elevage de tristan grillons - Erwan THOMY   ########
######################################################

# CHECKLIST
# Niveau d'eau: FAIT
# Temperature: FAIT
# Humidite pondoir: EN COURS
# Nourriture: A FAIRE
# Stream: A FAIRE

#Import des libraires
import sys
import time
import grovepi

#Declaration des constantes
CapteurNiveau = 0
CapteurTemperature = 1
CapteurHumidite = 2
Mnourriture = 3
PompePondoir = 4
PompeAbreuvoir = 5
Ventilateurs = 7
Radiateur = 8
EtatPompe = 0 #Fixe le crash lorsque EtatNiveau est entre 500 et 600
grovepi.pinMode(CapteurTemperature, "INPUT")
grovepi.pinMode(Ventilateurs, "OUTPUT")
grovepi.pinMode(Radiateur, "OUTPUT")
grovepi.pinMode(CapteurNiveau, "INPUT")
grovepi.pinMode(PompeAbreuvoir, "OUTPUT")


#Initialisation du programme principal
while True:
	try:
		#humiditée, température = Adafruit_DHT.read_retry(11, 4)
		EtatNiveau = grovepi.analogRead(CapteurNiveau)
		Temperature = grovepi.analogRead(CapteurTemperature)/21.3
		Temperature = round(Temperature, 1)
		Humidite = grovepi.analogRead(CapteurHumidite)/8.8
		Humidite = round(Humidite, 1)
		print ("Valeur Numerique:", EtatNiveau)
		#On ecrit les valeurs pour le site
		file = open ("Cniveau.txt", "w")
		file.write("Valeur: " + str(EtatNiveau))
		file.close	
		file = open ("Chumidite.txt", "w")
		file.write(str(Humidite))
		file.close
		file = open ("CTemp.txt", "w")
		file.write(str(Temperature))
		file.close	
		
		if (EtatNiveau >= 600):
			grovepi.digitalWrite(PompeAbreuvoir, 0)
			EtatPompe = 0
			print ("Pompe de l'abreuvoir a l'arret")
			file = open ("abreuvoir.txt", "w")
			file.write("Inactif")
			file.close
		elif (EtatNiveau <= 500):
			grovepi.digitalWrite(PompeAbreuvoir, 1)
			EtatPompe = 1
			print ("Pompe de l'abreuvoir en marche")
			file = open ("abreuvoir.txt", "w")
			file.write("Actif")
			file.close
		elif (EtatPompe == 1):
			print ("Pompe de l'abreuvoir en marche")
			file = open ("abreuvoir.txt", "w")
			file.write("Actif")
			file.close
		else:
			print ("Pompe de l'abreuvoir a l'arret")
			file = open ("abreuvoir.txt", "w")
			file.write("Inactif")
			file.close
			
		if (Temperature < 25):
			grovepi.digitalWrite(Radiateur, 1)
			print ("Radiateur en marche")
			file = open ("radiateur.txt", "w")
			file.write("Actif")
			file.close
		elif (Temperature > 25):
			grovepi.digitalWrite(Radiateur, 0)
			print ("Radiateur eteint")
			file = open ("radiateur.txt", "w")
			file.write("Inactif")
			file.close
		if (Temperature > 30):
			grovepi.digitalWrite(Ventilateurs, 1)
			print ("Ventilateurs en marche")
			file = open ("ventilo.txt", "w")
			file.write("Actif")
			file.close
		elif (Temperature < 30):
			grovepi.digitalWrite(Ventilateurs, 0)
			print ("Ventilateurs a l'arret")
			file = open ("ventilo.txt", "w")
			file.write("Inactif")
			file.close
		if (Humidite < 15):
			grovepi.digitalWrite(PompePondoir, 1)
			print ("Pompe du pondoir en marche")
			file = open ("pondoir.txt", "w")
			file.write("Actif")
			file.close
		elif (Humidite > 30):
			grovepi.digitalWrite(PompePondoir, 0)
			print ("Pompe du pondoir a l' arret")
			file = open ("pondoir.txt", "w")
			file.write("Inactif")
			file.close
			
		time.sleep(0.5)
		
	except KeyboardInterrupt:
		grovepi.digitalWrite(PompeAbreuvoir,0)
		print ("Sortie du programme")
		break