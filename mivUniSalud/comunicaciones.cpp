#include "comunicaciones.h"

// Datos de conexión WiFi
const char* ssid = "JACV";
const char* password = "jacv-777";

// Datos de conexión servidor Web
const char* host = "192.168.20.12";
const int port = 80;
const char* url = "/farmaciaUnidadSalud-Xampp/dispositivoIoT/envioBD.php"; 

/**
 * @brief Establece la conexión Wi-Fi con el punto de acceso especificado.
 *
 * Esta función se encarga de establecer la conexión Wi-Fi con el punto de acceso especificado
 * en las constantes `ssid` y `password`.
 */
void conectarWifi() {
  WiFi.begin(ssid, password);
}

/**
 * @brief Envía los datos de temperatura y humedad al servidor especificado.
 *
 * Esta función envía los datos de temperatura y humedad al servidor especificado en las constantes
 * `host`, `port` y `url`. Utiliza una conexión WiFiClient para establecer una conexión con el servidor
 * y realiza una solicitud POST con los datos como contenido.
 *
 * @param datos Los datos de temperatura y humedad a enviar al servidor.
 * @return La respuesta del servidor o "error" en caso de falla.
 */
String enviarDatosTemperaturaHumedad(String datos) {
  String line = "error";
  WiFiClient client;

  // Validación de conexión
  if (!client.connect(host, port)) {
    return line;
  }

  // Envío de la solicitud al Servidor
  client.print(
    String("POST ") + url + " HTTP/1.1\r\n" +
    "Host: " + host + "\r\n" +
    "Accept: */*" + "*\r\n" +
    "Content-Length: " + datos.length() + "\r\n" +
    "Content-Type: application/x-www-form-urlencoded" + "\r\n"
    + "\r\n" + datos
  );
  delay(10);

  unsigned long timeout = millis();
  while (client.available() == 0)
  {
    if (millis() - timeout > 5000)
    {
      client.stop();
      return line;
    }
  }
  // Lee todas las lineas que recibe del servidor y las imprime por la terminal serial
  while (client.available())
  {
    line = client.readStringUntil('\r');
  }
  return line;
}
