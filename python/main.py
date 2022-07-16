from machine import Pin, I2C
from ssd1306 import SSD1306_I2C
import time
from dht import DHT11
from machine import Pin
from utime import sleep
import urequests
import network, time
from machine import Pin

def conectaWifi (red, password):
      global miRed
      miRed = network.WLAN(network.STA_IF)     
      if not miRed.isconnected():              #Si no está conectado…
          miRed.active(True)                   #activa la interface
          miRed.connect(red, password)         #Intenta conectar con la red
          print('Conectando a la red', red +"…")
          timeout = time.time ()
          while not miRed.isconnected():           #Mientras no se conecte..
              if (time.ticks_diff (time.time (), timeout) > 10):
                  return False
      return True



if conectaWifi ("FAMILIA RODRIGUEZ", "3209859251"):
    print ("Conexión exitosa!")
    print('Datos de la red (IP/netmask/gw/DNS):', miRed.ifconfig())
else:
   print ("Imposible conectar")
   miRed.active (False)

sensorDHT = DHT11(Pin(14))

ancho = 128
alto = 64

i2c = I2C(0, scl=Pin(22), sda=Pin(21))
oled = SSD1306_I2C(ancho, alto, i2c)

print(i2c.scan())

oled.text("++++++++++",10,00)
oled.text("Zona de alerta",10,10)

oled.show()

led=Pin(4,Pin.OUT)
ledVerde=Pin(2,Pin.OUT)

while True:
    
    time.sleep(4)
    sleep(0)

    sensorDHT.measure()
    temp = sensorDHT.temperature()
    hum = sensorDHT.humidity()
    print("T={:02}C H={:02}%  ".format(temp, hum))
    
    temp_oled = temp
    oled.fill(0)
    oled.text("++++++++++",10,00)
    oled.text("Zona de alerta",10,10)
    oled.text("Temperatura={:02}".format(temp_oled), 10,40)
    oled.show()
    
    if temp >= 4 and temp <= 12:
        led.value(0)
        print("La temperatura esta estable")
        ledVerde.value(1)
    else:
        ledVerde.value(0)
        print("Generar alerta")
        led.value(1)
        
        url_api = "http://www.serviciosproyecta.net/Andres/Zona_de_alerta/web/php/apis/insert_temperatura.php?token=8adjHDSJ7255ppKJ&temp=1&hum=1";
        #response = urequests.get('https://www.serviciosproyecta.net/Andres/Zona_de_alerta/web/php/apis/insert_temperatura.php?token=8adjHDSJ7255ppKJ&temp='+str(temp_oled)+'&hum='+str(hum))
        response = urequests.get(url_api)
        print(response) 

 