/**
 * @file comunicaciones.h
 * @brief Biblioteca de comunicaciones
 *
 * Esta biblioteca contiene funciones y variables relacionadas con la comunicación,
 * como la conexión WiFi y el envío de datos al servidor.
 */
 
#ifndef COMUNICACIONES_H
#define COMUNICACIONES_H

#include <WiFi.h>
#include <WiFiClientSecure.h>
#include <WiFiClient.h>

extern const char* ssid;
extern const char* password;
extern const char* host;
extern const int port;
extern const char* url;

/**
 * @brief Red WiFi
 *
 * SSID (nombre de la red WiFi) y contraseña para la conexión al punto de acceso WiFi.
 */
extern const char* ssid;
extern const char* password;

/**
 * @brief Servidor Web
 *
 * Dirección del servidor y puerto para la conexión. También se especifica la URL para el envío de datos.
 */
extern const char* host;
extern const int port;
extern const char* url;

/**
 * @brief Establece la conexión WiFi
 *
 * Esta función establece la conexión WiFi utilizando el SSID y la contraseña especificados.
 */
extern void conectarWifi();

/**
 * @brief Envía datos de temperatura y humedad al servidor
 *
 * Esta función envía los datos de temperatura y humedad al servidor especificado.
 * Los datos se envían a través de una conexión segura (HTTPS).
 *
 * @param datos Los datos de temperatura y humedad a enviar al servidor.
 * @return La respuesta del servidor o un mensaje de error en caso de fallo.
 */
extern String enviarDatosTemperaturaHumedad(String datos);

#endif
