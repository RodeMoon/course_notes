# WiFi
El ESP32 es un microcontrolador con conectividad WiFi integrada, lo que lo hace ideal para proyectos IoT. 

---

## 1. **[Servidor web](files/Ejemplo_Wifi1.ino)**
Este código crea un servidor web utilizando el ESP32 que permite acceder a una página web desde un navegador. Se mostrarán cuatro botones, cuando se haga clic en un botón, el servidor recibirá una solicitud y podrá realizar una acción dependiendo del botón presionado.

## 2. **[Control de LED](files/Ejemplo_Wifi2.ino)**
Este código crea un servidor web que permite controlar un LED. Se pueden presionar botones para encender o apagar el LED. Cuando un usuario hace clic en un botón, el servidor procesa la solicitud y actualiza el estado del LED. 

## 3. **[Control de LED con imágenes](files/Ejemplo_Wifi3.ino)**
Este código crea un servidor web que permite controlar un LED que incluye botones para controlarlo y muestra imágenes que representan su estado (encendido o apagado).

## 4. **[Obtención de datos de la red](files/Wifi_2.ino)**
Este código establece una conexión Wi-Fi y luego muestra los detalles de la conexión, como la dirección IP, la dirección MAC, la máscara de subred, la puerta de enlace y la dirección DNS.