Arduino Firebase Connection
===========================

Save your Arduino data in Firebase database


The Firebase guys lets you connect to your own firebase database and do  all the CRUD operations through 
simple calls to their api. You can visit their website and they will give you a 100mb database free. 
Which is enough to store at least a years readings. This is what I thought but quickly I came up with a 
huge problem. Firebase uses only HTTPS for security reasons and my Arduino Uno’s microprocessor don’t have 
enough power for that. The idea to bypass this issue is to proxy the requests through a server that can 
speak ssl. In order to achieve this I used the Firebase PHP library. Think of it like 
this Arduino->Php website->Firebase. Once the data are in Firebase then you retrieve them in many different ways.

Full howto guide here: http://www.devacron.com/arduino-firebase/
