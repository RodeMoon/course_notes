#include <BluetoothSerial.h>
#include <WiFi.h>
#include <HTTPClient.h>

BluetoothSerial SerialBT;

const char* ssid = "Markiolle"; 
const char* password = "fullsun12"; 

String serverURL = "https://fullsun.space/test.php";

void setup() {
    Serial.begin(115200);
    SerialBT.begin("Cheetito");  

    WiFi.begin(ssid, password);
    Serial.print("Conectando WiFi");
    while (WiFi.status() != WL_CONNECTED) {
        delay(500);
        Serial.print(".");
    }
    Serial.println("\nConexión exitosa.");
}

void loop() {
    if (SerialBT.available()) { 
        String data = SerialBT.readStringUntil('\n');  
        Serial.println("Datos: " + data);

        int separatorIndex = data.indexOf(':');
        if (separatorIndex != -1) {
            String sensor = data.substring(0, separatorIndex);  
            String valor = data.substring(separatorIndex + 1); 

            Serial.println("Sensor: " + sensor);
            Serial.println("Valor: " + valor);

            sendDataToServer(sensor, valor);
        }
    }
}

void sendDataToServer(String sensor, String valor) {
    if (WiFi.status() == WL_CONNECTED) {
        HTTPClient http;
        http.begin(serverURL);
        http.addHeader("Content-Type", "application/json");  

        String jsonPayload = "{\"sensor\": \"" + sensor + "\", \"valor\": " + valor + "}";
        Serial.println("Enviando JSON: " + jsonPayload);

        int httpResponseCode = http.POST(jsonPayload);

        Serial.print("Código HTTP: ");
        Serial.println(httpResponseCode);

        if (httpResponseCode > 0) {
            String response = http.getString();
            Serial.println("Respuesta del servidor: " + response);
        } else {
            Serial.println("Error: " + String(httpResponseCode));
        }

        http.end(); 
    } else {
        Serial.println("Sin WiFi.");
    }
}
