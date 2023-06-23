/**
 * @file sensor.h
 * @brief Biblioteca del sensor de temperatura y humedad
 *
 * Esta biblioteca contiene las funciones y variables relacionadas con el sensor de temperatura y humedad,
 * como la lectura de los valores del sensor, el cálculo del promedio y las variables globales para
 * almacenar los valores promedio.
 */
 
#ifndef SENSOR_H
#define SENSOR_H

#include <DHT.h>

#define DHTPIN 13       // Pin de datos del DHT11
#define DHTTYPE DHT11  // Tipo de sensor DHT

extern DHT dht;  // Objeto DHT
extern float promedioTemperatura, promedioHumedad;

/**
 * @brief Objeto DHT
 *
 * Instancia del objeto DHT utilizado para la comunicación con el sensor de temperatura y humedad.
 */
extern DHT dht;

/**
 * @brief Promedio de temperatura
 *
 * Variable global que almacena el promedio de temperatura calculado.
 */
extern float promedioTemperatura;

/**
 * @brief Promedio de humedad
 *
 * Variable global que almacena el promedio de humedad calculado.
 */
extern float promedioHumedad;

/**
 * @brief Leer temperatura
 *
 * Esta función lee la temperatura del sensor y la devuelve como un valor flotante.
 *
 * @return El valor de temperatura leído.
 */
extern float leerTemperatura();

/**
 * @brief Leer humedad
 *
 * Esta función lee la humedad del sensor y la devuelve como un valor flotante.
 *
 * @return El valor de humedad leído.
 */
extern float leerHumedad();

/**
 * @brief Calcular promedio
 *
 * Esta función calcula el promedio de temperatura y humedad a partir de múltiples lecturas
 * del sensor y actualiza las variables globales promedioTemperatura y promedioHumedad.
 */
extern void calcularPromedio();

#endif
