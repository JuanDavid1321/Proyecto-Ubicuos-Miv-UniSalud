document.getElementById('descargar-pdf').addEventListener('click', function() {
  // Captura la imagen de la gráfica
  html2canvas(document.getElementById('cargaLineal'), {
    scale: 2 // aumenta la calidad de la imagen
  }).then(function(canvas) {
    // Crea un objeto jsPDF y agrega la imagen al archivo PDF
    var imgData = canvas.toDataURL('image/png');
    var pdf = new jsPDF('landscape', 'px');
    pdf.setFont('Muli');
    pdf.setFontSize(12);

    pdf.addImage(imgData, 'PNG', 25, 60, 600, 350);
    var img = new Image();
    img.src = 'images/logoUnicauca.png';
    pdf.addImage(img, 'png', 25, 10, 40, 70);
    var img2 = new Image();
    img2.src = 'images/inicioUnidadSalud.png';
    pdf.addImage(img2, 'png', 80, 35, 80, 40);
    // var img2 = new Image();
    // img2.src = 'images/inicioUnidadSalud.png';
    // pdf.addImage(img2, 'png', 500, 25, 90, 50);

    //Para mes seleccionado
    // var select = document.getElementById("mes-selecionado");
    // var selectedOption = select.options[select.selectedIndex];
    // var mesSeleccionadoUsuario = selectedOption.text;
    // var textReporte = "Mes: " + mesSeleccionadoUsuario;

    pdf.setTextColor('#1F77B4');
    pdf.text('© MIV-UNISALUD',500,440);

    // Agregar linea
    // pdf.line(25, 90, 550, 90);

    pdf.save('reporte_temp_mañana.pdf'); // descarga el archivo PDF
  });


  // Captura la imagen de la gráfica
  html2canvas(document.getElementById('cargaLineal2'), {
    scale: 2 // aumenta la calidad de la imagen
  }).then(function(canvas) {
    // Crea un objeto jsPDF y agrega la imagen al archivo PDF
    var imgData = canvas.toDataURL('image/png');
    var pdf = new jsPDF('landscape', 'px');
    pdf.setFont('Muli');
    pdf.setFontSize(12);

    pdf.addImage(imgData, 'PNG', 25, 60, 600, 350);
    var img = new Image();
    img.src = 'images/logoUnicauca.png';
    pdf.addImage(img, 'png', 25, 10, 40, 70);
    var img2 = new Image();
    img2.src = 'images/inicioUnidadSalud.png';
    pdf.addImage(img2, 'png', 80, 35, 80, 40);
    // var img2 = new Image();
    // img2.src = 'images/inicioUnidadSalud.png';
    // pdf.addImage(img2, 'png', 500, 25, 90, 50);

    //Para mes seleccionado
    // var select = document.getElementById("mes-selecionado");
    // var selectedOption = select.options[select.selectedIndex];
    // var mesSeleccionadoUsuario = selectedOption.text;
    // var textReporte = "Mes: " + mesSeleccionadoUsuario;

    pdf.setTextColor('#1F77B4');
    pdf.text('© MIV-UNISALUD',500,440);

    // Agregar linea
    // pdf.line(25, 90, 550, 90);

    pdf.save('reporte_hum_mañana.pdf'); // descarga el archivo PDF
  }) 


  // Captura la imagen de la gráfica
  html2canvas(document.getElementById('cargaLineal3'), {
    scale: 2 // aumenta la calidad de la imagen
  }).then(function(canvas) {
    // Crea un objeto jsPDF y agrega la imagen al archivo PDF
    var imgData = canvas.toDataURL('image/png');
    var pdf = new jsPDF('landscape', 'px');
    pdf.setFont('Muli');
    pdf.setFontSize(12);

    pdf.addImage(imgData, 'PNG', 25, 60, 600, 350);
    var img = new Image();
    img.src = 'images/logoUnicauca.png';
    pdf.addImage(img, 'png', 25, 10, 40, 70);
    var img2 = new Image();
    img2.src = 'images/inicioUnidadSalud.png';
    pdf.addImage(img2, 'png', 80, 35, 80, 40);
    // var img2 = new Image();
    // img2.src = 'images/inicioUnidadSalud.png';
    // pdf.addImage(img2, 'png', 500, 25, 90, 50);

    //Para mes seleccionado
    // var select = document.getElementById("mes-selecionado");
    // var selectedOption = select.options[select.selectedIndex];
    // var mesSeleccionadoUsuario = selectedOption.text;
    // var textReporte = "Mes: " + mesSeleccionadoUsuario;

    pdf.setTextColor('#1F77B4');
    pdf.text('© MIV-UNISALUD',500,440);

    // Agregar linea
    // pdf.line(25, 90, 550, 90);

    pdf.save('reporte_temp_tarde.pdf'); // descarga el archivo PDF
  })


  // Captura la imagen de la gráfica
  html2canvas(document.getElementById('cargaLineal4'), {
    scale: 2 // aumenta la calidad de la imagen
  }).then(function(canvas) {
    // Crea un objeto jsPDF y agrega la imagen al archivo PDF
    var imgData = canvas.toDataURL('image/png');
    var pdf = new jsPDF('landscape', 'px');
    pdf.setFont('Muli');
    pdf.setFontSize(12);

    pdf.addImage(imgData, 'PNG', 25, 60, 600, 350);
    var img = new Image();
    img.src = 'images/logoUnicauca.png';
    pdf.addImage(img, 'png', 25, 10, 40, 70);
    var img2 = new Image();
    img2.src = 'images/inicioUnidadSalud.png';
    pdf.addImage(img2, 'png', 80, 35, 80, 40);
    // var img2 = new Image();
    // img2.src = 'images/inicioUnidadSalud.png';
    // pdf.addImage(img2, 'png', 500, 25, 90, 50);

    //Para mes seleccionado
    // var select = document.getElementById("mes-selecionado");
    // var selectedOption = select.options[select.selectedIndex];
    // var mesSeleccionadoUsuario = selectedOption.text;
    // var textReporte = "Mes: " + mesSeleccionadoUsuario;

    pdf.setTextColor('#1F77B4');
    pdf.text('© MIV-UNISALUD',500,440);

    // Agregar linea
    // pdf.line(25, 90, 550, 90);

    pdf.save('reporte_hum_tarde.pdf'); // descarga el archivo PDF
  });
});
