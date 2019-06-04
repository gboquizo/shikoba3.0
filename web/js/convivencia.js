/**
 * Created by Josema on 04/10/2017.
 */



$(document).ready(function () {

    $.fn.dataTable.ext.buttons.reload = {
        text: '<i class="material-icons">autorenew</i>',
        titleAttr: 'Recargar',
        action: function (e, dt, node, config) {
            window.location.href = window.location.href
        }
    };

    const SANCION_TYPE_HORAS = 5;
    const HORAS_CLASE = {
        '1': '8:15 - 9:15',
        '2': '9:15 - 10:15',
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
                orientation: 'portrait',
                title: 'Informes Shikoba',
                pageSize: 'A3',
                customize: function (doc) {
                    doc.defaultStyle.alignment = 'center'
                    doc.content[1].table.widths =
                        Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                }
            },
            {
                extend: 'excelHtml5',
                text: '<i class="excel"></i>',
                titleAttr: 'Excel'
            },
            {
                extend: 'csvHtml5',
                text: '<i class="csv"></i>',
                titleAttr: 'CSV'
            },
            {
                extend: 'print',
                text: '<i class="material-icons">print</i>',
                titleAttr: 'Imprimir'
            },

            'reload'
        ]
    });

    let tableDataCarnets = $('.tableDataCarnets').DataTable({
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
                orientation: 'portrait',
                title: 'Informes Shikoba',
                pageSize: 'A3',
                customize: function (doc) {
                    doc.defaultStyle.alignment = 'center'
                    doc.content[1].table.widths =
                        Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                }
            },
            {
                extend: 'excelHtml5',
                text: '<i class="excel"></i>',
                titleAttr: 'Excel'
            },
            {
                extend: 'csvHtml5',
                text: '<i class="csv"></i>',
                titleAttr: 'CSV'
            },
            {
                extend: 'print',
                text: '<i class="material-icons">print</i>',
                titleAttr: 'Imprimir'
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
                    orientation: 'portrait',
                    title: 'Informes Shikoba',
                    pageSize: 'A3',
                    customize: function (doc) {
                        doc.defaultStyle.alignment = 'center'
                        doc.content[1].table.widths =
                            Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                    }
                },
                {
                    extend: 'excelHtml5',
                    text: '<i class="excel"></i>',
                    titleAttr: 'Excel'
                },
                {
                    extend: 'csvHtml5',
                    text: '<i class="csv"></i>',
                    titleAttr: 'CSV'
                },
                {
                    extend: 'print',
                    text: '<i class="material-icons">print</i>',
                    titleAttr: 'Imprimir'
                },

            ],
        });
    let tableDataPartes = $('.tableDataPartes').DataTable({
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
                orientation: 'portrait',
                title: 'Informes Shikoba',
                pageSize: 'A3',
                customize: function (doc) {
                    doc.defaultStyle.alignment = 'center'
                    doc.content[1].table.widths =
                        Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                }
            },
            {
                extend: 'excelHtml5',
                text: '<i class="excel"></i>',
                titleAttr: 'Excel'
            },
            {
                extend: 'csvHtml5',
                text: '<i class="csv"></i>',
                titleAttr: 'CSV'
            },
            {
                extend: 'print',
                text: '<i class="material-icons">print</i>',
                titleAttr: 'Imprimir'
            },

        ],
    });
    paint(tableDataCarnets);
    paint(tableDataPartes);
    paint(tableDataMedidas);
});

function paint() {
    //estilos para los botones encima de las tablas
    $('.dataTables_wrapper input').addClass("marginBottom");
    $('.dataTables_filter').css("text-align", "center");
    $('.dt-buttons').addClass("right col s4 m6 l2 altur");
    $('.dt-buttons').css("margin-top", "2%");
    if ($(window).width() < "991") {
        $('.altur').css("height", $('#DataTables_Table_0_filter').height());
    }
};