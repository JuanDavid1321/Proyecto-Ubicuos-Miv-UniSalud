#include "sensor.h"

DHT dht(DHTPIN, DHTTYPE);  // Objeto DHT
float promedioTemperatura, promedioHumedad;

/**
 * @brief Lee la temperatura del sensor DHT y la devuelve como un valor de tipo float.
 * @return La temperatura leída.
 */
float leerTemperatura() {
  float temperature;
  return temperature = dht.readTemperature();
}

/**
 * @brief Lee la humedad del sensor DHT y la devuelve como un valor de tipo float.
 * @return La humedad leída.
 */
float leerHumedad() {
  float humidity;
  return humidity = dht.readHumidity();
}

/**
 * @brief Realiza múltiples lecturas de temperatura y humedad utilizando las funciones leerTemperatura() y leerHumedad().
 * Luego calcula el promedio de las temperaturas y humedades leídas durante un número determinado de lecturas.
 * Los resultados se almacenan en las variables promedioTemperatura y promedioHumedad.
 */
void calcularPromedio() {
  float sumaTemperaturas = 0.0;
  float sumaHumedades = 0.0;
  int numeroLecturas = 10;

  for (int i = 0; i < numeroLecturas; i++) {
    float temperature = leerTemperatura();
    float humidity = leerHumedad();
    sumaTemperaturas += temperature;
    sumaHumedades += humidity;
    delay(5000);
  }

  promedioTemperatura = sumaTemperaturas / numeroLecturas;
  promedioHumedad = sumaHumedades / numeroLecturas;
}
