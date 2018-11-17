#!C:\Python27\python.exe
print("Content-Type:text/html;charset=utf-8\n\n")

import pymysql
conn=pymysql.connect(host='localhost',user='root',password='',db='demo')
cursor = conn.cursor(pymysql.cursors.DictCursor)

cursor.execute('SELECT * from `farmers`;')

result_set= cursor.fetchall()


import numpy as np
import cv2

detector= cv2.CascadeClassifier('haarcascade_frontalface_default.xml')
cap = cv2.VideoCapture(0)
rec=cv2.createLBPHFaceRecognizer();
rec.load("recognizer\\trainingData.yml")
id=0
font=cv2.cv.InitFont(cv2.cv.CV_FONT_HERSHEY_COMPLEX_SMALL,5,1,0,4)
while(True):
    ret, img = cap.read()
    gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
    faces = detector.detectMultiScale(gray, 1.3, 5)
    for (x,y,w,h) in faces:
        cv2.rectangle(img,(x,y),(x+w,y+h),(255,255,255),10)
        id,conf=rec.predict(gray[y:y+h,x:x+w])
        for row in result_set:
         if(id==1 & (row['id']==1)):
            id=row['firstname']
         elif(id==2 & (row['id']==2)):
            id=(row['firstname'])
        cv2.cv.PutText(cv2.cv.fromarray(img),str(id),(x,y+h),font,255);
    cv2.imshow('Face',img)
    if cv2.waitKey(1) & 0xFF == ord('q'):
        break
    
cap.release()
cv2.destroyAllWindows()
