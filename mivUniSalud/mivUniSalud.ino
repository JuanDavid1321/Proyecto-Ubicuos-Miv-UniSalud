/**
 * @file mivUniSalud.ino
 * @authors Maria_Paula_Cabezas_Charry, Juan_David_Carvajal_Cucuñame
 *
 * @brief Proyecto: Miv-UniSalud
 *
 * Universidad del Cauca
 * Facultad de Ingeniería Electrónica y Telecomunicaciones
 * Programa de Ingeniería Electrónica y Telecomunicaciones
 * Electiva: Desarrollo de Aplicaciones para Sistemas Ubicuos
 */

#include "sensor.h"
#include "comunicaciones.h"
#include "reloj.h"

/**
 * @brief Configuración inicial del programa.
 *
 * Esta función se ejecuta una vez al inicio del programa y se encarga de realizar
 * las configuraciones iniciales necesarias, como inicializar el sensor, conectar
 * a la red WiFi y actualizar el reloj en tiempo real.
 */
void setup() {
  dht.begin();
  conectarWifi();
  actualizarRTC();
}

/**
 * @brief Bucle principal del programa.
 *
 * Esta función se ejecuta en un bucle continuo después de la configuración inicial.
 * Realiza la lectura y cálculo del promedio de los datos del sensor, construye una URL
 * con los datos de temperatura y humedad, envía los datos a través de comunicaciones
 * y luego entra en modo de suspensión (deep sleep).
 */
void loop() {
  calcularPromedio();
  String data = construirURLDatos();
  enviarDatosTemperaturaHumedad(data);
  entrarEnDeepSleep();
}
