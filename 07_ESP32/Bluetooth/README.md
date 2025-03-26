# Bluetooth
Se adjuntan las prácticas desarrolladas con el uso del Bluetooth para facilitar la comunicación y control de dispositivos. 

---

## 1. **[Bridge entre Bluetooth y Serial (SPP)](files/BT1.ino)**
Permite enviar y recibir datos desde un dispositivo Bluetooth emparejado, facilitando la interacción con cualquier dispositivo compatible con Bluetooth SPP.

## 2. **[Control de LED](files/BT2.ino)**
El dispositivo Bluetooth envía un '1' para encender el LED y un '0' para apagarlo. Los comandos son recibidos a través de la conexión Bluetooth serial.

## 3. **[Inicialización y configuración](files/BT3.ino)**
Configura el ESP32 para que se pueda emparejar con dispositivos Bluetooth cercanos y permite cambiar el nombre del dispositivo.

## 4. **[Control de LEDs](files/BT4.ino)**
El dispositivo Bluetooth envía caracteres: "1" enciende el LED en el pin GPIO 2. "2" apaga el LED en el pin GPIO 2. "3" enciende el LED en el pin GPIO 14. "4" apaga el LED en el pin GPIO 14.

## 5. **[Control de LED mediante mensajes](files/BT5.ino)**
El dispositivo Bluetooth envía mensajes: "led_on" enciende el LED. "led_off" apaga el LED.

## 6. **[Control de LED con comandos](files/BT6.ino)**
Este proyecto permite encender y apagar un LED conectado al pin GPIO 2 del ESP32 mediante comandos enviados por Bluetooth. Se utilizan los caracteres 'A' y 'B' para encender y apagar el LED, respectivamente.