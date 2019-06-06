/**
 * Created by Josema on 04/10/2017.
 */



$(document).ready(function () {

    moment.locale('es');

    $.fn.dataTable.ext.buttons.reload = {
        text: '<i class="material-icons">autorenew</i>',
        titleAttr: 'Recargar',
        action: function (e, dt, node, config) {
            window.location.href = window.location.href
        }
    };

    const SANCION_TYPE_HORAS = 5;
    const HORAS_CLASE = {
        '1': '08:15 - 09:15',
        '2': '09:15 - 10:15',
        '3': '10:15 - 11-15',
        '4': '11:40 - 12:40',
        '5': '12:40 - 13:40',
        '6': '13:40 - 14:40'
    };


    //CHOSEN
    $('.chosen-select').chosen();

    //DATEPICKER
    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '< Ant',
        nextText: 'Sig >',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);
    $('.datepicker').datepicker();


    //PARTE FORM, CONDUCTAS MOSTRAR Y OCULTAR
    $.each($('.selectForm input'), function (key, value) {
        if ($(value).prop('checked') == true) {
            ocultarCheckbox();
            return false;
        }
    });

    function ocultarCheckbox() {
        $.each($('.selectForm input'), function (key, value) {
            if ($(value).prop('checked') == false) {
                $(value).next('label').hide();
                $(value).hide();
            }
        });

        $('.selectForm')
            .after('<div id="divAbrir" class="col s12 center" style="margin-bottom: 1%"><input type="button" class="btn z-depth-3 blue darken-4 waves-effect waves-light checkAbrir" value="+"></div>');

    }

    $('body').on('click', '.checkAbrir', function () {
        $.each($('.selectForm input'), function (key, value) {
            if ($(value).prop('checked') == false) {
                $(value).next('label').show(250);
                $(value).show(250);
            }
        });

        $('.checkAbrir').removeClass('checkAbrir').addClass('checkCerrar').val('-');
    })
        .on('click', '.checkCerrar', function () {
            $.each($('.selectForm input[type=checkbox]'), function (key, value) {
                if ($(value).prop('checked') == false) {
                    $(value).next('label').hide(250);
                    $(value).hide(250);
                }
            });

            $('.checkCerrar').removeClass('checkCerrar').addClass('checkAbrir').val('+');
        }).on('click', '.checkNewSancion', function () {
        // Funcionalidad boton añadir Sanción HoraAC
        $(this).before(contenedorNewHoraSancion());
    })
    //PARTE FORM BÚSQUEDA AVANZADA
        .on('click', '.busquedaMas', function () {
            $('#cursos').show(300).css('display', 'flex');
            $(this).removeClass('busquedaMas').addClass('busquedaMenos');
        })
        .on('click', '.busquedaMenos', function () {
            $('#cursos').hide(300);
            $(this).removeClass('busquedaMenos').addClass('busquedaMas');
        });

    // SANCIONES, SI TIPO ES HORAS O JORNADA MOSTRAR NUEVOS INPUTS

    $('#sancion_form_idTipo').on('change', function () {
        $('#checkEditSancion').hide();
        if ($(this).val() == SANCION_TYPE_HORAS) {
            $('.contenedorFlexEdit').css('visibility', 'visible');
            let buttonAdd = '<div class="col s12 center"><input type="button" class="btn z-depth-1 blue darken-3 waves-effect waves-light checkNewSancion" value="+"></div>';
            contenedorNewHoraSancion(buttonAdd);
        } else {
            $('.contenedorFlex').hide();
            $('.contenedorFlexEdit').remove();
        }
    });

    /**
     * Función que añade el contenedor HoraAC con los inputs
     * @param text HTML que se puede añadir al final del contenedor
     */
    function contenedorNewHoraSancion(text = '') {
        let fecha = new Date();
        var options = {
            day: "numeric", month: "2-digit", year: "numeric"
        };
        fecha = fecha.toLocaleString('es-Es', options);
        let input = '<div class="row contenedorFlexEdit">' +
            '<div class="col s6 input-field">' +
            '<input type="text" class="datepicker" id="dat" placeholder="." name="fechaHora[]" contenteditable="false" value="' + fecha + '">' +
            '<label for="dat" class="active">Fecha Hora Sanción</label>' +
            '</div>' +
            '<div class="col s6 input-field" id="horasAC">' +
            '<select name="horaAc[]">';
        for (let key in HORAS_CLASE) {
            input += '<option value="' + key + '">' + HORAS_CLASE[key] + '</option>';
        }
        input += '</select><label>Hora</label>';
        input += '</div></div>';
        $('#sancion_form_idTipo').after(input);
        $('.contenedorFlexEdit')
            .append(text);
        $('.datepicker').datepicker();
        $('#horasAC > select').material_select();
        $('.caret').css("display", "none");
    }

    //ICHECK

    $('.i-checks').iCheck({
        checkboxClass: 'icheckbox_square-blue checkbus',
        radioClass: 'iradio_square-blue',
    });


    // Hamburguer Nav

    $("#hamburguer").on('click', function () {
        $("nav").toggle();
        $("#navLeft").toggle();
    });

    // Tooltipster
    $('.tooltip').tooltipster({
        theme: 'tooltipster-light'
    });
    // Pantalla Confirmación
    $('a.confirm').confirm({
        theme: 'supervan',
        content: "¿Está seguro de realizar esta acción?",
        buttons: {
            Aceptar: function () {
                location.href = this.$target.attr('href');
            },
            Cancelar: function () {

            }
        },
        columnClass: 'confirmdialog'
    });

    $('#contenedorUpload').on('change', 'input:file', function () {
        if ($(this).val()) {
            $('#contenedorUpload input:submit').removeAttr('disabled');
        }
    });

    $('#botonImportar').on('click', function () {
        $('#contenedorUpload .loader').css({opacity: 0, visibility: "visible"}).animate({opacity: 1}, 500)
    })


    // DataTables

    jQuery.extend(jQuery.fn.dataTableExt.oSort, {
        "date-eu-pre": function (date) {
            date = date.replace(" ", "");

            if (!date) {
                return 0;
            }

            var year;
            var month;
            var day;
            var eu_date = date.split(/[\.\-\/]/);

            /*year (optional)*/
            if (eu_date[2]) {
                year = eu_date[2];
            } else {
                year = 0;
            }

            /*year (optional)*/
            if (eu_date[1]) {
                month = eu_date[1];
            } else {
                month = 0;
            }

            /*year (optional)*/
            if (eu_date[0]) {
                day = eu_date[0];
            } else {
                day = 0;
            }

            /* /!*month*!/
             var month = 0;
             month = eu_date[1];
             if (month.length === 1) {
                 month = 0 + month;
             }

             /!*day*!/
             var day = eu_date[0];
             if (day.length === 1) {
                 day = 0 + day;
             }*/

            return (year + month + day) * 1;
        },

        "date-eu-asc": function (a, b) {
            return ((a < b) ? -1 : ((a > b) ? 1 : 0));
        },

        "date-eu-desc": function (a, b) {
            return ((a < b) ? 1 : ((a > b) ? -1 : 0));
        }
    });

    $('.tableData').DataTable({
        //css para cambiar el estilo al cargar la tabla
        "drawCallback": function (settings) {
            $(".dt-button").addClass("btn btn-floating blue darken-3");
            $("#DataTables_Table_0_wrapper>div:first-child").addClass("col s12 m4 center");
            $(".dt-button").removeClass("dt-button");
            //botones de exortar en tablas
            $("#DataTables_Table_0_wrapper>.dt-buttons").after("<div id='nuevo' class='col s12 m4 l3'></div>");
            $('.dt-buttons').css("margin-right", "2%");
            //el label aparece dos veces por lo que borro uno cada vez que se añade
            $("#DataTables_Table_0_wrapper>div>.remo").remove();
            $("#DataTables_Table_0_wrapper>div>.buttons-pdf").before("<label style='margin-right: 3%;' class='remo'>Exportar</label>");
            $('.dt-buttons').removeClass("dt-buttons");
            if ($(window).width() > "600" && $(window).width() < "990") {
                $("#DataTables_Table_0_wrapper>div:first-child").addClass("right offset-m8");
                $("#DataTables_Table_0_wrapper>div:first-child").removeClass("center");
                //esta condicion sirve para la ventana de partes
                if ($("#parte").length > 0) {
                    $("#DataTables_Table_0_wrapper>div.offset-m8").before("<div id='botonnuevo' class='col m3 left'></div>");
                    $("#DataTables_Table_0_wrapper>div.offset-m8").addClass("offset-m4");
                    $("#DataTables_Table_0_wrapper>div.offset-m8").removeClass("offset-m8");
                    $("#parte").appendTo("#botonnuevo");
                }

            }
            if ($(window).width() > "991") {
                $("#DataTables_Table_0_wrapper>div:first-child").removeClass("center");
                $("#DataTables_Table_0_wrapper>div:first-child").addClass("right l3");
                $("#DataTables_Table_0_wrapper>div:first-child").css("text-align", "left");
                $("#DataTables_Table_0_wrapper>div:first-child").css("margin-top", "2%");
                $("#nuevo").addClass("center");
                //esta condicion sirve para la ventana de partes
                if ($("#parte").length > 0) {
                    $("#botonbus button").css("left", "-5%");
                    $("#nuevo").addClass("l4");
                    $("#nuevo").removeClass("l3");

                }

            }
            $("#aqui").appendTo("#nuevo");
            $("#aqui2").appendTo("#nuevo");
            $(".paginate_button.current").addClass("btn  blue darken-4 waves-effect waves-light z-depth-3 pagi");
            $(".paginate_button").addClass("btn  blue darken-2 waves-effect waves-light z-depth-3 pagi");
            $(".paginate_button.current").removeClass("paginate_button current");
            $(".paginate_button").removeClass("paginate_button");
            //muestro los select de las tablas
            $("#DataTables_Table_0_length select").css("display", "flex");
        },
        "lengthMenu": [[5, 10, 20, 30, -1], [5, 10, 20, 30, "Todos"]],
        language: {
            search: "Busca en la tabla ",
            paginate: {
                first: "Primero",
                previous: "<i class='material-icons pagi'>chevron_left</i>",
                next: "<i class='material-icons pagi'>chevron_right</i>",
                last: "Último"
            },
            lengthMenu: "Mostrar _MENU_",
            emptyTable: "No hay registros en la tabla",
            info: "Mostrando _END_ registros de _TOTAL_ en total",
            infoEmpty: "No hay resultados",
            infoFiltered: "(filtrado de _MAX_ en total)",
            zeroRecords: "No se encuentra ningun registro",
        },
        //botones para exportacion
        dom: 'Bfrt<"prefooter"lip>',
        buttons: [

            {
                extend: 'pdfHtml5',
                text: '<i class="material-icons">picture_as_pdf</i>',
                titleAttr: 'PDF',
                filename:'Informes Shikoba: ' + $('.tableData').closest('body').find('h3').text(),
                orientation: 'portrait',
                title: 'Shikoba -Sawabona: tabla de ' + ($('.tableData').closest('body').find('h3').text()).toLocaleLowerCase() + '.',
                pageSize: 'A3',
                customize: function(doc) {
                    let customDoc = doc
                    customizeHeader(customDoc, $('.tableData'))
                },
                exportOptions: {
                    columns: "thead th:not(.noExport)",
                    search: 'applied',
                    order: 'applied'
                },
                footer: true
            },
            {
                extend: 'excelHtml5',
                text: '<i class="excel"></i>',
                titleAttr: 'Excel',
                filename:'Informes Shikoba: ' + $('.tableData').closest('body').find('h3').text(),
                title: 'Shikoba -Sawabona: tabla de ' + ($('.tableData').closest('body').find('h3').text()).toLocaleLowerCase() + '.',
                exportOptions: {
                    columns: "thead th:not(.noExport)"
                }
            },
            {
                extend: 'csvHtml5',
                text: '<i class="csv"></i>',
                titleAttr: 'CSV',
                filename:'Informes Shikoba: ' + $('.tableData').closest('body').find('h3').text(),
                title: 'Shikoba -Sawabona: tabla de ' + ($('.tableData').closest('body').find('h3').text()).toLocaleLowerCase() + '.',
                exportOptions: {
                    columns: "thead th:not(.noExport)"
                }
            },
            {
                extend: 'print',
                text: '<i class="material-icons">print</i>',
                titleAttr: 'Imprimir',
                filename:'Informes Shikoba: ' + $('.tableData').closest('body').find('h3').text(),
                title: 'Shikoba -Sawabona: tabla de ' + ($('.tableData').closest('body').find('h3').text()).toLocaleLowerCase() + '.',
                exportOptions: {
                    columns: "thead th:not(.noExport)"
                }
            },

            'reload'
        ]
    });

    let tableDataCarnets = $('.tableDataCarnets').DataTable({
        //css para cambiar el estilo al cargar la tabla
        "drawCallback": function (settings) {
            $(".dt-button").addClass("btn btn-floating blue darken-3");
            $("#DataTables_Table_0_wrapper>div:first-child").addClass("col s12 m4 center");
            $(".dt-button").removeClass("dt-button");
            //botones de exortar en tablas
            $("#DataTables_Table_0_wrapper>.dt-buttons").after("<div id='nuevo' class='col s12 m4 l3'></div>");
            $('.dt-buttons').css("margin-right", "2%");
            //el label aparece dos veces por lo que borro uno cada vez que se añade
            $("#DataTables_Table_0_wrapper>div>.remo").remove();
            $("#DataTables_Table_0_wrapper>div>.buttons-pdf").before("<label style='margin-right: 3%;' class='remo'>Exportar</label>");
            $('.dt-buttons').removeClass("dt-buttons");
            if ($(window).width() > "600" && $(window).width() < "990") {
                $("#DataTables_Table_0_wrapper>div:first-child").addClass("right offset-m8");
                $("#DataTables_Table_0_wrapper>div:first-child").removeClass("center");

            }
            if ($(window).width() > "991") {
                $("#DataTables_Table_0_wrapper>div:first-child").removeClass("center");
                $("#DataTables_Table_0_wrapper>div:first-child").addClass("right l3");
                $("#DataTables_Table_0_wrapper>div:first-child").css("text-align", "left");
                $("#DataTables_Table_0_wrapper>div:first-child").css("margin-top", "2%");
                $("#DataTables_Table_0_filter").css("text-align", "center");

                $("#nuevo").addClass("center");

            }
            $("#aqui").appendTo("#nuevo");
            $("#aqui2").appendTo("#nuevo");

            $(".paginate_button.current").addClass("btn  blue darken-4 waves-effect waves-light z-depth-3 pagi");
            $(".paginate_button").addClass("btn  blue darken-2 waves-effect waves-light z-depth-3 pagi");
            $(".paginate_button.current").removeClass("paginate_button current");
            $(".paginate_button").removeClass("paginate_button");
            //muestro los select de las tablas
            $("#DataTables_Table_0_length select").css("display", "block");
            $("#carnetFilterPuntos").material_select();


        },
        "lengthMenu": [[5, 10, 20, 30, -1], [5, 10, 20, 30, "Todos"]],
        language: {
            search: "Busca en la tabla ",
            paginate: {
                first: "Primero",
                previous: "<i class='material-icons pagi'>chevron_left</i>",
                next: "<i class='material-icons pagi'>chevron_right</i>",
                last: "Último"
            },
            lengthMenu: "Mostrar _MENU_",
            emptyTable: "No hay registros en la tabla",
            info: "Mostrando _END_ registros de _TOTAL_ en total",
            infoEmpty: "No hay resultados",
            infoFiltered: "(filtrado de _MAX_ en total)",
            zeroRecords: "No se encuentra ningun registro",
        },
        //botones para exportacion
        dom: 'Bfrt<"prefooter"lip>',
        buttons: [
            {
                extend: 'pdfHtml5',
                text: '<i class="material-icons">picture_as_pdf</i>',
                titleAttr: 'PDF',
                filename:'Informes Shikoba: ' + $('.tableDataCarnets').closest('body').find('h3').text(),
                orientation: 'portrait',
                title: 'Shikoba -Sawabona: tabla de ' + ($('.tableDataCarnets').closest('body').find('h3').text()).toLocaleLowerCase() + '.',
                pageSize: 'A3',
                customize: function(doc) {
                    let customDoc = doc
                    customizeHeader(customDoc, $('.tableDataCarnets'))
                },
                exportOptions: {
                    columns: "thead th:not(.noExport)",
                    search: 'applied',
                    order: 'applied'
                },
                footer: true
            },
            {
                extend: 'excelHtml5',
                text: '<i class="excel"></i>',
                titleAttr: 'Excel',
                filename:'Informes Shikoba: ' + $('.tableDataCarnets').closest('body').find('h3').text(),
                title: 'Shikoba -Sawabona: tabla de ' + ($('.tableDataCarnets').closest('body').find('h3').text()).toLocaleLowerCase() + '.',
                exportOptions: {
                    columns: "thead th:not(.noExport)"
                }
            },
            {
                extend: 'csvHtml5',
                text: '<i class="csv"></i>',
                titleAttr: 'CSV',
                filename:'Informes Shikoba: ' + $('.tableDataCarnets').closest('body').find('h3').text(),
                title: 'Shikoba -Sawabona: tabla de ' + ($('.tableDataCarnets').closest('body').find('h3').text()).toLocaleLowerCase() + '.',
                exportOptions: {
                    columns: "thead th:not(.noExport)"
                }
            },
            {
                extend: 'print',
                text: '<i class="material-icons">print</i>',
                titleAttr: 'Imprimir',
                filename:'Informes Shikoba: ' + $('.tableDataCarnets').closest('body').find('h3').text(),
                title: 'Shikoba -Sawabona: tabla de ' + ($('.tableDataCarnets').closest('body').find('h3').text()).toLocaleLowerCase() + '.',
                exportOptions: {
                    columns: "thead th:not(.noExport)"
                }

            },
        ],
    });

    let tableDataMedidas = $('.tableDataMedidas').DataTable({
        "aoColumnDefs": [
            {
                "targets": [1, 3, 4],
                "sType": "date-eu",
                "render": function (data) {
                    return data;

                }
            }
        ],
        "drawCallback": function (settings) {
            $(".dt-button").addClass("btn btn-floating blue darken-3");
            $("#DataTables_Table_0_wrapper>div:first-child").addClass("col s12 m4 center");
            $(".dt-button").removeClass("dt-button");
            //botones de exortar en tablas
            $("#DataTables_Table_0_wrapper>.dt-buttons").after("<div id='nuevo' class='col s12 m4 l3'></div>");
            $('.dt-buttons').css("margin-right", "2%");
            //el label aparece dos veces por lo que borro uno cada vez que se añade
            $("#DataTables_Table_0_wrapper>div>.remo").remove();
            $("#DataTables_Table_0_wrapper>div>.buttons-pdf").before("<label style='margin-right: 3%;' class='remo'>Exportar</label>");
            $('.dt-buttons').removeClass("dt-buttons");
            if ($(window).width() > "600" && $(window).width() < "990") {
                $("#DataTables_Table_0_wrapper>div:first-child").addClass("right offset-m8");
                $("#DataTables_Table_0_wrapper>div:first-child").removeClass("center");
                //esta condicion sirve para la ventana de partes
                if ($("#parte").length > 0) {
                    $("#DataTables_Table_0_wrapper>div.offset-m8").before("<div id='botonnuevo' class='col m3 left'></div>");
                    $("#DataTables_Table_0_wrapper>div.offset-m8").addClass("offset-m4");
                    $("#DataTables_Table_0_wrapper>div.offset-m8").removeClass("offset-m8");
                    $("#parte").appendTo("#botonnuevo");
                }

            }
            if ($(window).width() > "991") {
                $("#DataTables_Table_0_wrapper>div:first-child").removeClass("center");
                $("#DataTables_Table_0_wrapper>div:first-child").addClass("right l3");
                $("#DataTables_Table_0_wrapper>div:first-child").css("text-align", "left");
                $("#DataTables_Table_0_wrapper>div:first-child").css("margin-top", "2%");
                $("#nuevo").addClass("center");
                //esta condicion sirve para la ventana de partes
                if ($("#parte").length > 0) {
                    $("#botonbus button").css("left", "-5%");
                    $("#nuevo").addClass("l4");
                    $("#nuevo").removeClass("l3");

                }

            }
            $("#aqui").appendTo("#nuevo");
            $("#aqui2").appendTo("#nuevo");
            $(".paginate_button.current").addClass("btn  blue darken-4 waves-effect waves-light z-depth-3 pagi");
            $(".paginate_button").addClass("btn  blue darken-2 waves-effect waves-light z-depth-3 pagi");
            $(".paginate_button.current").removeClass("paginate_button current");
            $(".paginate_button").removeClass("paginate_button");
            //muestro los select de las tablas
            $("#DataTables_Table_0_length select").css("display", "flex");
        },
        "lengthMenu": [[5, 10, 20, 30, -1], [5, 10, 20, 30, "Todos"]],
        language: {
            search: "Busca en la tabla ",
            paginate: {
                first: "Primero",
                previous: "<i class='material-icons pagi'>chevron_left</i>",
                next: "<i class='material-icons pagi'>chevron_right</i>",
                last: "Último"
            },
            lengthMenu: "Mostrar _MENU_",
            emptyTable: "No hay registros en la tabla",
            info: "Mostrando _END_ registros de _TOTAL_ en total",
            infoEmpty: "No hay resultados",
            infoFiltered: "(filtrado de _MAX_ en total)",
            zeroRecords: "No se encuentra ningun registro",
        },
        //botones para exportacion
        dom: 'Bfrt<"prefooter"lip>',
        buttons: [

            {
                extend: 'pdfHtml5',
                text: '<i class="material-icons">picture_as_pdf</i>',
                titleAttr: 'PDF',
                filename:'Informes Shikoba: ' + $('.tableDataMedidas').closest('body').find('h3').text(),
                orientation: 'portrait',
                title: 'Shikoba -Sawabona: tabla de ' + ($('.tableDataMedidas').closest('body').find('h3').text()).toLocaleLowerCase() + '.',
                pageSize: 'A3',
                customize: function(doc) {
                    let customDoc = doc
                    customizeHeader(customDoc, $('.tableDataMedidas'))
                },
                exportOptions: {
                    columns: "thead th:not(.noExport)",
                    search: 'applied',
                    order: 'applied'
                },
                footer: true

            },
            {
                extend: 'excelHtml5',
                text: '<i class="excel"></i>',
                titleAttr: 'Excel',
                filename:'Informes Shikoba: ' + $('.tableDataMedidas').closest('body').find('h3').text(),
                title: 'Shikoba -Sawabona: tabla de ' + ($('.tableDataMedidas').closest('body').find('h3').text()).toLocaleLowerCase() + '.',
                exportOptions: {
                    columns: "thead th:not(.noExport)"
                }
            },
            {
                extend: 'csvHtml5',
                text: '<i class="csv"></i>',
                titleAttr: 'CSV',
                filename:'Informes Shikoba: ' + $('.tableDataMedidas').closest('body').find('h3').text(),
                title: 'Shikoba -Sawabona: tabla de ' + ($('.tableDataMedidas').closest('body').find('h3').text()).toLocaleLowerCase() + '.',
                exportOptions: {
                    columns: "thead th:not(.noExport)"
                }
            },
            {
                extend: 'print',
                text: '<i class="material-icons">print</i>',
                titleAttr: 'Imprimir',
                filename:'Informes Shikoba: ' + $('.tableDataMedidas').closest('body').find('h3').text(),
                title: 'Shikoba -Sawabona: tabla de ' + ($('.tableDataMedidas').closest('body').find('h3').text()).toLocaleLowerCase() + '.',
                exportOptions: {
                    columns: "thead th:not(.noExport)"
                }
            },

        ],
    });

    let tableDataPartes = $('.tableDataPartes').DataTable({
        "aoColumnDefs": [
            {
                "targets": [1],
                "sType": "date-eu",
                "render": function (data) {
                    return data;

                }
            }
        ],
        "drawCallback": function (settings) {
            $(".dt-button").addClass("btn btn-floating blue darken-3");
            $("#DataTables_Table_0_wrapper>div:first-child").addClass("col s12 m4 center");
            $(".dt-button").removeClass("dt-button");
            //botones de exortar en tablas
            $("#DataTables_Table_0_wrapper>.dt-buttons").after("<div id='nuevo' class='col s12 m4 l3'></div>");
            $('.dt-buttons').css("margin-right", "2%");
            //el label aparece dos veces por lo que borro uno cada vez que se añade
            $("#DataTables_Table_0_wrapper>div>.remo").remove();
            $("#DataTables_Table_0_wrapper>div>.buttons-pdf").before("<label style='margin-right: 3%;' class='remo'>Exportar</label>");
            $('.dt-buttons').removeClass("dt-buttons");
            if ($(window).width() > "600" && $(window).width() < "990") {
                $("#DataTables_Table_0_wrapper>div:first-child").addClass("right offset-m8");
                $("#DataTables_Table_0_wrapper>div:first-child").removeClass("center");
                //esta condicion sirve para la ventana de partes
                if ($("#parte").length > 0) {
                    $("#DataTables_Table_0_wrapper>div.offset-m8").before("<div id='botonnuevo' class='col m3 left'></div>");
                    $("#DataTables_Table_0_wrapper>div.offset-m8").addClass("offset-m4");
                    $("#DataTables_Table_0_wrapper>div.offset-m8").removeClass("offset-m8");
                    $("#parte").appendTo("#botonnuevo");
                }

            }
            if ($(window).width() > "991") {
                $("#DataTables_Table_0_wrapper>div:first-child").removeClass("center");
                $("#DataTables_Table_0_wrapper>div:first-child").addClass("right l3");
                $("#DataTables_Table_0_wrapper>div:first-child").css("text-align", "left");
                $("#DataTables_Table_0_wrapper>div:first-child").css("margin-top", "2%");
                $("#nuevo").addClass("center");
                //esta condicion sirve para la ventana de partes
                if ($("#parte").length > 0) {
                    $("#botonbus button").css("left", "-5%");
                    $("#nuevo").addClass("l4");
                    $("#nuevo").removeClass("l3");

                }

            }
            $("#aqui").appendTo("#nuevo");
            $("#aqui2").appendTo("#nuevo");
            $(".paginate_button.current").addClass("btn  blue darken-4 waves-effect waves-light z-depth-3 pagi");
            $(".paginate_button").addClass("btn  blue darken-2 waves-effect waves-light z-depth-3 pagi");
            $(".paginate_button.current").removeClass("paginate_button current");
            $(".paginate_button").removeClass("paginate_button");
            //muestro los select de las tablas
            $("#DataTables_Table_0_length select").css("display", "flex");
        },
        "lengthMenu": [[5, 10, 20, 30, -1], [5, 10, 20, 30, "Todos"]],
        language: {
            search: "Busca en la tabla ",
            paginate: {
                first: "Primero",
                previous: "<i class='material-icons pagi'>chevron_left</i>",
                next: "<i class='material-icons pagi'>chevron_right</i>",
                last: "Último"
            },
            lengthMenu: "Mostrar _MENU_",
            emptyTable: "No hay registros en la tabla",
            info: "Mostrando _END_ registros de _TOTAL_ en total",
            infoEmpty: "No hay resultados",
            infoFiltered: "(filtrado de _MAX_ en total)",
            zeroRecords: "No se encuentra ningun registro",
        },
        //botones para exportacion
        dom: 'Bfrt<"prefooter"lip>',
        buttons: [

            {
                extend: 'pdfHtml5',
                text: '<i class="material-icons">picture_as_pdf</i>',
                filename:'Informes Shikoba: ' + $('.tableDataPartes').closest('body').find('h3').text(),
                titleAttr: 'PDF',
                orientation: 'portrait',
                title: 'Shikoba -Sawabona: tabla de ' + ($('.tableDataPartes').closest('body').find('h3').text()).toLocaleLowerCase() + '.',
                pageSize: 'A3',
                customize: function(doc) {
                    let customDoc = doc
                    customizeHeader(customDoc, $('.tableDataPartes'))
                },
                exportOptions: {
                    columns: "thead th:not(.noExport)",
                    search: 'applied',
                    order: 'applied'
                },
                footer: true
            },
            {
                extend: 'excelHtml5',
                text: '<i class="excel"></i>',
                filename:'Informes Shikoba: ' + $('.tableDataPartes').closest('body').find('h3').text(),
                titleAttr: 'Excel',
                title: 'Shikoba -Sawabona: tabla de ' + ($('.tableDataPartes').closest('body').find('h3').text()).toLocaleLowerCase() + '.',
                exportOptions: {
                    columns: "thead th:not(.noExport)"
                }
            },
            {
                extend: 'csvHtml5',
                text: '<i class="csv"></i>',
                filename:'Informes Shikoba: ' + $('.tableDataPartes').closest('body').find('h3').text(),
                titleAttr: 'CSV',
                title: 'Shikoba -Sawabona: tabla de ' + ($('.tableDataPartes').closest('body').find('h3').text()).toLocaleLowerCase() + '.',
                exportOptions: {
                    columns: "thead th:not(.noExport)"
                }
            },
            {
                extend: 'print',
                text: '<i class="material-icons">print</i>',
                filename:'Informes Shikoba: ' + $('.tableDataPartes').closest('body').find('h3').text(),
                titleAttr: 'Imprimir',
                title: 'Shikoba -Sawabona: tabla de ' + ($('.tableDataPartes').closest('body').find('h3').text()).toLocaleLowerCase() + '.',
                exportOptions: {
                    columns: "thead th:not(.noExport)"
                }
            },

        ],
    });

    let tableDataDiario = $('.tableDataDiario').DataTable({
        "aoColumnDefs": [
            {
                "targets": [1],
                "sType": "date-eu",
                "render": function (data) {
                    return data;

                }
            }
        ],
        //css para cambiar el estilo al cargar la tabla
        "drawCallback": function (settings) {
            $("#DataTables_Table_0_wrapper>div:first-child").addClass("col s12 m4 center");
            $("#DataTables_Table_0_wrapper>.dt-buttons").after("<div id='nuevo' class='col s12 m4 l3'></div>");
            if ($(window).width() > "600" && $(window).width() < "990") {
                $("#DataTables_Table_0_wrapper>div:first-child").addClass("right offset-m8");
                $("#DataTables_Table_0_wrapper>div:first-child").removeClass("center");

            }
            if ($(window).width() > "991") {
                $("#DataTables_Table_0_wrapper>div:first-child").removeClass("center");
                $("#DataTables_Table_0_wrapper>div:first-child").addClass("right l3");
                $("#DataTables_Table_0_wrapper>div:first-child").css("text-align", "left");
                $("#DataTables_Table_0_wrapper>div:first-child").css("margin-top", "2%");
                $("#DataTables_Table_0_filter").css("text-align", "center");
            }

            $(".paginate_button.current").addClass("btn  blue darken-4 waves-effect waves-light z-depth-3 pagi");
            $(".paginate_button").addClass("btn  blue darken-2 waves-effect waves-light z-depth-3 pagi");
            $(".paginate_button.current").removeClass("paginate_button current");
            $(".paginate_button").removeClass("paginate_button");
            //muestro los select de las tablas
            $("#DataTables_Table_0_length select").css("display", "block");
            $("#carnetFilterPuntos").material_select();


        },
        "lengthMenu": [[5, 10, 15, 20, -1], [5, 10, 15, 20, "Todos"]],
        language: {
            paginate: {
                first: "Primero",
                previous: "<i class='material-icons pagi'>chevron_left</i>",
                next: "<i class='material-icons pagi'>chevron_right</i>",
                last: "Último"
            },
            lengthMenu: "Mostrar _MENU_",
            info: "Mostrando _END_ registros de _TOTAL_ en total",
            infoFiltered: "(filtrado de _MAX_ en total)",
        },
        //botones para exportacion
        dom: 'Btr<"prefooter"lip>',
    });
    tableDataDiario.buttons().destroy();
    paint(tableDataCarnets);
    paint(tableDataPartes);
    paint(tableDataMedidas);
});

/**
 * let paint some objects in datatables
 */
let paint = function() {
    //styles for the buttons over the tables.
    $('.dataTables_wrapper input').addClass("marginBottom");
    $('.dataTables_filter').css("text-align", "center");
    $('.dt-buttons').addClass("right col s4 m6 l2 altur");
    $('.dt-buttons').css("margin-top", "2%");
    if ($(window).width() < "991") {
        $('.altur').css("height", $('#DataTables_Table_0_filter').height());
    }
};

/**
 * Let the customization of header, footer, and other features in pdfhtml5's export
 * @param customDoc doc where the customization is applied
 * @param classs selector jQuery where the class works, a class.
 */
let customizeHeader = function(customDoc,classs) {
    customDoc.defaultStyle.alignment = 'center'
    customDoc.content[1].table.widths =
        Array(customDoc.content[1].table.body[0].length + 1).join('*').split('');

    //Prepare header and footer

    //Current date
    let now = moment().format('dddd, DD [de] MMMM [de] YYYY, [a las] HH:mm:ss');

    //A base64 image for the logo
    let logo = 'data:image/png;base64,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'

    // A documentation reference can be found at
    // https://github.com/bpampuch/pdfmake#getting-started

    // Set page margins [left,top,right,bottom] or [horizontal,vertical]
    // or one number for equal spread
    // It's important to create enough space at the top for a header !!!
    customDoc.pageMargins = [20, 120, 20, 40];

    // Set the font size fot the entire document
    customDoc.defaultStyle.fontSize = 12;

    // Set the fontsize for the table header
    customDoc.styles.tableHeader.fontSize = 12;

    // Create a header object with 3 columns
    // Left side: Logo
    // Middle: brandname
    // Right side: A document title

    customDoc['header'] = (function () {
        return {
            columns: [
                {
                    image: logo,
                    fit: [100, 100],
                    pageBreak: 'after',
                    opacity: 0.7
                },
                {
                    alignment: 'left',
                    italics: true,
                    text: 'Informe Shikoba: ',
                    fontSize: 24,
                    fit: [50, 50],
                    margin: [0, 25,0,0],
                },
                {
                    alignment: 'middle',
                    italics: true,
                    text: classs.closest('body').find('h3').text(),
                    fontSize: 24,
                    fit: [300, 300],
                    margin: [-80, 25,0,0]
                },
               /* {
                    alignment: 'right',
                    fontSize: 14,
                    text: '',
                    margin: [25, 30]
                }*/
            ],
            margin: 20
        }
    });

    // Create a footer object with 2 columns
    // Left side: report creation date
    // Right side: current page and total pages
    customDoc['footer'] = (function (page, pages) {
        return {
            columns: [
                {
                    alignment: 'left',
                    text: ['Creado el ', {text: now}],
                    margin: [0, 10, 0, 10]
                },
                {
                    alignment: 'right',
                    text: ['Página ', {text: page.toString()}, ' de ', {text: pages.toString()}],
                    margin: [0, 10, 0, 10]
                }
            ],
            //left, top, right, bottom
            margin: [50, 0, 50, 0]
        }
    });
};