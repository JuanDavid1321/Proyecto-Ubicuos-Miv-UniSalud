# Miv-UniSalud

Este repositorio contiene el código fuente y la documentación para un proyecto de monitorización de temperatura y humedad en un contexto farmacéutico, utilizando la placa microcontroladora ESP32. El proyecto está diseñado para leer datos de un sensor de temperatura y humedad, enviar los datos a un servidor web, mostrar los resultados en tiempo real y generar reportes.

## Características
- Lectura de temperatura y humedad utilizando el sensor DHT11.
- Actualización periódica de los datos utilizando una ventana de tiempo.
- Conexión Wi-Fi para enviar los datos al servidor.
- Gestión energética de la placa microcontroladora.
- Envío de datos utilizando HTTP.
- Autenticación de usuarios en una aplicación web.
- Visualización de los datos en una interfaz web.
- Descarga de reportes en formato PDF.

## Requisitos de Hardware
- ESP32
- Sensor de temperatura y humedad DHT11
- Cables de conexión

## Requisitos de Software
- Arduino IDE
- MySQL
- phpMyAdmin
- Apache Web Server
- Bootstrap 5 
- Bibliotecas lenguaje C:
  - DHT
  - WIFI
  - ESP32TIME
- Bibliotecas lenguaje JavaScript:
  - Plotly.js
  - html2canvas
  - jsPDF

## Uso
### Configuración del entorno:

Instala Arduino IDE en tu computadora si no lo has hecho.
Abre Arduino IDE y configura la placa ESP32 y el puerto serial correspondiente.
Instala las bibliotecas DHT y WiFi para ESP32.
Conexión del hardware:

Conecta el sensor de temperatura y humedad DHT11 al pin designado en el ESP32 según la configuración establecida en el archivo sensor.h.
Asegúrate de que el ESP32 esté conectado a una red Wi-Fi.
Configuración del servidor:

Actualiza las variables host, port y url en el archivo comunicaciones.h con la información del servidor web al que deseas enviar los datos.
Carga del código:

Abre el archivo main.ino en Arduino IDE.
Verifica el código para asegurarte de que todas las configuraciones sean correctas.
Carga el código en el ESP32.
Monitoreo de los datos:

Una vez que el código esté cargado en el ESP32, comenzará a leer los datos de temperatura y humedad y enviarlos al servidor web según la configuración establecida.
Puedes verificar los datos enviados al servidor accediendo a la URL especificada en la variable url y verificando la respuesta del servidor.
También puedes realizar un monitoreo continuo de los datos utilizando la interfaz web del servidor.

## Contribución
Este proyecto ha sido desarrollado como parte de un curso académico y no aceptamos contribuciones externas. Sin embargo, si encuentra algún error o problema en la aplicación, puede informarlo a través de los issues en este repositorio.

## Licencia
Este proyecto está bajo la Licencia MIT. Consulta el archivo LICENSE para obtener más información.
