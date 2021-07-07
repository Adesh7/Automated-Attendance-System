import MySQLdb
import csv

db = MySQLdb.connect(host="192.168.102.103", # The Host
                     user="pi", # username
                     passwd="password", # password
                     db="mydb.TABLE 1") # name of the data base

sqlLoadData = 'LOAD DATA LOCAL INFILE "csv?Employees.csv" INTO TABLE TABLE 1 '   
sqlLoadData += 'FIELDS TERMINATED BY "," LINES TERMINATED BY "\n"'     
sqlLoadData += 'IGNORE 1 LINES'     
sqlLoadData += 'ENCLOSED BY '"' ESCAPED BY "\\" '

try:
    curs = db.cursor()   
    curs.execute(sqlLoadData)    
    resultSet = curs.fetchall()    
except StandardError, e:    
    print e    
    db.rollback()
    db.close()