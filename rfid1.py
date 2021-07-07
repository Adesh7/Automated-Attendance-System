import csv
import serial
import datetime
print(serial.__file__)
port='/dev/ttyACM0'
ard=serial.Serial(port,9600)
uid =[0]
name=[0]
in=[0]
in=ard.readline()
uid=ard.readline()
name=ard.readline()
x=datetime.datetime.now()

row = [in,uid,name,x]

with open('Employees.csv', 'a') as csvFile:
    writer = csv.writer(csvFile)
    writer.writerow(row)
csvFile.close()
