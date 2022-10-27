const accountSid = 'ACc876b578abccebc4588af50fcf70c5d8'; 
const authToken = '6148cc24c664240b7a514dc9c5bc3fab'; 
const client = require('twilio')(accountSid, authToken); 
 
client.messages 
      .create({ 
         body: 'hello karthik ',  
         messagingServiceSid: 'MG2b9fbf8594bb20bafc1ce52dd158d2f0',      
         to: '+916383475297' 
       }) 
      .then(message => console.log(message.sid)) 
      .done();




