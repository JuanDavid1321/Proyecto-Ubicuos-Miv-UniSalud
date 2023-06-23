#include "sensor.h"
#include "reloj.h"

// Datos conexión servidor NTP -> Colombia
const char* ntpServer = "pool.ntp.org";
const long gmtOffset_sec = -5 * 3600;
const int daylightOffset_sec = 0;

ESP32Time rtc;

/**
 * @brief Construye la URL de los datos
 *
 * Esta función construye la URL de los datos a enviar. Utiliza el objeto rtc para obtener
 * la fecha y hora actual y combina los valores de temperatura, humedad, fecha y hora en una cadena de consulta.
 *
 * @return La URL de los datos.
 */
String construirURLDatos() {
  String date = rtc.getTime("%Y/%m/%d");
  String timestamp = rtc.getTime("%H:%M:%S");
  String urlDatos = "temp=" + String(promedioTemperatura) + "&hum=" + String(promedioHumedad) + "&date=" + date + "&timestamp=" + timestamp;
  return urlDatos;
}

/**
 * @brief Actualiza el RTC (Real-Time Clock)
 *
 * Esta función actualiza la configuración del RTC (Real-Time Clock) utilizando el servidor NTP
 * especificado en la constante ntpServer. Luego, obtiene la hora actual del servidor NTP y
 * actualiza el RTC interno de la ESP32 con esta información.
 */
void actualizarRTC() {
  configTime(gmtOffset_sec, daylightOffset_sec, ntpServer);
  struct tm timeinfo;
  if (getLocalTime(&timeinfo)) {
    rtc.setTimeStruct(timeinfo);
  }
}

/**
 * @brief Entra en el modo de suspensión profunda
 *
 * Esta función configura el modo de suspensión profunda en la ESP32 y establece el tiempo
 * de espera para despertar. En este caso, se establece un tiempo de espera de 5 minutos
 * antes de que la ESP32 se despierte.
 */
void entrarEnDeepSleep() {
  esp_sleep_enable_timer_wakeup(5 * 60e6);
  esp_deep_sleep_start();
}
