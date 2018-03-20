
#include <SoftwareSerial.h>

SoftwareSerial mySerial(7,8);
#include "pins_arduino.h"
#define m1 9
#define m2 10
#define m3 11
#define m4 12
#define switch 13
char message[50];

#define WARNLEDPIN 6
char tag1[] ="18008947E83E"; 
char tag2[] ="3E00FD2C9D72"; 
char tag3[] ="3E00FD2E2SC8";
char tag4[] ="3E00FD2CA24D";
char tag5[] ="3E00FD3IF002";
char tag6[] ="3E00FD6E1EB3";
char input[12];				// A variable to store the Tag ID being presented
int count = 0;				// A counter variable to navigate through the input[] character array
int flag = 0;			// A variable to store the Tag match status
void setup()
{
	Serial.begin(9600);		// Initialise Serial Communication with the Serial Monitor
  mySerial.begin(9600);   // Setting the baud rate of GSM Module 
	pinMode(m4,OUTPUT);
  pinMode(m4,OUTPUT);
  pinMode(m4,OUTPUT);
  pinMode(m4,OUTPUT);// MOTOR OUTPUT OUTPUT
  pinMode(switch,OUTPUT);
	pinMode(WARNLEDPIN,OUTPUT);
  digitalWrite(switch,LOW);
}
void loop()
{
	if(Serial.available())
	{
		count = 0; // Reset the counter to zero
		while(Serial.available() && count < 12) 
		{
			input[count] = Serial.read(); 
			count++; // increment counter
			delay(5);
		}
		if(count == 12) // 
		{
			count =0; // reset counter varibale to 0
			flag = 1;
			while(count<12 && flag !=0)  
			{
				if(input[count]==tag1[count])
				flag = 1; // everytime the values match, we set the flag variable to 1
				else
				flag= 0; 
				count++; 
			}
     if(flag!=1)
     {count=0;
            while(count<12 && flag !=2)  
      { 
        if(input[count]==tag2[count]){
        flag = 1; 
        }
        else
        {  
          flag = 2;
        break;
       }                         
        count++; // increment i
      }
      }
           if(flag!=1)
     {count=0;
            while(count < 12 && flag != 3)  
      { 
        if(input[count]== tag3[count]){                                   
        
        flag = 1; 
        }
        else
        {  
          flag = 3;
        break;
       }                         
        count++; // increment i
      }
      }
           if(flag!=1)
     {count=0;
            while(count<12 && flag !=4)  
      { 
        if(input[count]==tag4[count]){
        flag = 1; 
        }
        else
        {  
          flag = 4;
        break;
       }                         
        count++; // increment i
      }
      }
           if(flag!=1)
     {count=0;
            while(count<12 && flag !=5)  
      { 
        if(input[count]==tag5[count]){
        flag = 1; 
        }
        else
        {  
          flag = 5;
        break;
       }                         
        count++; // increment i
      }
      }
           if(flag!=1)
     {count=0;
            while(count<12 && flag !=6)  
      { 
        if(input[count]==tag6[count]){
        flag = 1; 
        }
        else
        {  
          flag = 6;
        break;
       }                         
        count++; // increment i
      }
      }
		}
		
		if(flag == 1)
		{
			Serial.println("Access Allowed!");
       if(digitalRead(switch) == HIGH){
        Serial.println("entry allowed");
        digitalWrite(m1,HIGH);
        digitalWrite(m2,LOW);
        delay(3000);
        digitalWrite(m1,LOW);
        digitalWrite(m2,LOW);
        delay(3000);
        digitalWrite(m1,LOW);
        digitalWrite(m2,HIGH);
        delay(3000);
        digitalWrite(m1,LOW);
        digitalWrite(m2,LOW);
        Serial.println(input);
           if(input[10] == 3)
 {Serial.println("starting...");
  mySerial.println("AT+CMGF=1");    \

  delay(1000);  

  mySerial.println("AT+CMGS=\"+917007983616\"\r"); 

  delay(1000);
  mySerial.print("Secret id:18008947E83E  Entry Weight: 0.4kg");

  delay(100);

  mySerial.println((char)26);// ASCII code of CTRL+Z

  delay(1000);
  Serial.println("done Message");
 }

    else if(input[10] == 7)
 {Serial.println("starting...");
  mySerial.println("AT+CMGF=1");    \

  delay(1000);  

  mySerial.println("AT+CMGS=\"+917007983616\"\r"); 

  delay(1000);
  mySerial.print("Secret id:3E00FD2C9D72  Entry Weight: 0.2kg");

  delay(100);

  mySerial.println((char)26);// ASCII code of CTRL+Z

  delay(1000);
  Serial.println("done Message");
 }

 
    else if(input[10] == 4)
 {Serial.println("starting...");
  mySerial.println("AT+CMGF=1");    \

  delay(1000);  

  mySerial.println("AT+CMGS=\"+917007983616\"\r"); 

  delay(1000);
  mySerial.print("Secret id:3E00FD2CA24D  Entry Weight: 0.6kg");

  delay(100);

  mySerial.println((char)26);// ASCII code of CTRL+Z

  delay(1000);
  Serial.println("done Message");
 }

    else 
 {Serial.println("starting...");
  mySerial.println("AT+CMGF=1");    \

  delay(1000);  

  mySerial.println("AT+CMGS=\"+917007983616\"\r"); 

  delay(1000);
 mySerial.print("Secret id:3E00FD6E1EB3  Entry Weight: 1.1kg");

  delay(100);

  mySerial.println((char)26);// ASCII code of CTRL+Z

  delay(1000);
  Serial.println("done Message");
 }
       }  
       else if(digitalRead(switch) == LOW){
        Serial.println("Exit allowed...");
                digitalWrite(m3,HIGH);
        digitalWrite(m4,LOW);
        delay(3000);
        digitalWrite(m3,LOW);
        digitalWrite(m4,LOW);
        delay(3000);
        digitalWrite(m3,LOW);
        digitalWrite(m4,HIGH);
        delay(3000);
        digitalWrite(m3,LOW);
        digitalWrite(m4,LOW);
        
   
    if(input[10] == 3)
 {Serial.println("starting...");
  mySerial.println("AT+CMGF=1");    \

  delay(1000);  

  mySerial.println("AT+CMGS=\"+917007983616\"\r"); 

  delay(1000);
  mySerial.print("Secret id:18008947E83E  Exit Weight: 3.5kg");

  delay(100);

  mySerial.println((char)26);// ASCII code of CTRL+Z

  delay(1000);
  Serial.println("done Message");
 }

    else if(input[10] == 7)
 {Serial.println("starting...");
  mySerial.println("AT+CMGF=1");    \

  delay(1000);  

  mySerial.println("AT+CMGS=\"+917007983616\"\r"); 

  delay(1000);
  mySerial.print("Secret id:3E00FD2C9D72  Exit Weight: 3.8kg");

  delay(100);

  mySerial.println((char)26);// ASCII code of CTRL+Z

  delay(1000);
  Serial.println("done Message");
 }

 
    else if(input[10] == 4)
 {Serial.println("starting...");
  mySerial.println("AT+CMGF=1");    \

  delay(1000);  

  mySerial.println("AT+CMGS=\"+917007983616\"\r"); 

  delay(1000);
  mySerial.print("Secret id:3E00FD2CA24D  Exit Weight: 2.8kg");

  delay(100);

  mySerial.println((char)26);// ASCII code of CTRL+Z

  delay(1000);
  Serial.println("done Message");
 }

    else 
 {Serial.println("starting...");
  mySerial.println("AT+CMGF=1");    \

  delay(1000);  

  mySerial.println("AT+CMGS=\"+917007983616\"\r"); 

  delay(1000);
 mySerial.print("Secret id:3E00FD6E1EB3  Exit Weight: 4.1kg");

  delay(100);

  mySerial.println((char)26);// ASCII code of CTRL+Z

  delay(1000);
  Serial.println("done Message");
 }
       }              
       }
       

		
		else
		{
			Serial.println("Access Denied"); // Incorrect Tag Message
			digitalWrite(WARNLEDPIN,HIGH);
			delay(5000);
			digitalWrite(WARNLEDPIN,LOW);
		}
		
		for(count=0; count<12; count++) 
		{
			input[count]= 'F';
		}
		count = 0; // Reset counter variable

}
}
