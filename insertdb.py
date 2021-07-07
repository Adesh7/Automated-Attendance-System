import serial
from datetime import datetime
import time
import MySQLdb as mdb
from MySQLserver import *
from dateutil.tz import *
arduino=serial.Serial("/dev/ttyACM0",baudrate=9600)
Name=[None]*20
pieces=[None]*20
data=arduino.readline()
time.sleep(1)
data=arduino.readline()
pieces=data.split("\t")
Name=pieces[0]
local=tzlocal()
now=datetime.now()
now=now.replace(tzinfo=local)
con=mdb.connect('192.168.102.103','pi','password','mydb')
sql_select_query="select * from tag_id"
cursor.execute(sql_select_query)
records1=cursor.fetchall
sql_select_query2="select * from SI"
cursor.execute(sql_select_query2)
records2=cursor.fetchall
with con:
    cursor=con.cursor
    cursor.execute("""INSERT INTO MDB values ('','%s','%s','%s')""",(Name,in_time,out_time))
    con.commit()
    con.close()
