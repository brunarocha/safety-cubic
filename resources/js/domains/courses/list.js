/*"use strict";*/
/*document.ready(function(){
    this.getElementById("#table-1").dataTable({
        "columnDefs": [
            { "sortable": false, "targets": [2,3] }
        ]
    });
});*/

//$(function(){
    //$("#table-1").dataTable({
    /*document.getElementById("table-1").dataTable({
        "columnDefs": [
            { "sortable": false, "targets": [2,3] }
        ]
    });*/
//});

var DatatablesSearchOptionsAdvancedSearch = (function() {
    $.fn.dataTable.Api.register("column().title()", function() {
        return $(this.header())
            .text()
            .trim();
    });

    var initTable1 = function() {
        // begin first table
        var table = $("#m_table_1").DataTable({
            responsive: true,
            order: [[0, "desc"]],
            dom: `<'row'<'col-sm-12'tr>>
			<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,
            lengthMenu: [5, 10, 25, 50],
            pageLength: 10,
            language: {
                lengthMenu: "Display _MENU_"
            },
            searchDelay: 500,
            processing: true,
            serverSide: true,
            ajax: {
                url: "/microservices/clcs",
                type: "POST"
            },
            columns: [
                { data: "created_at", title: "Id" },
                { data: "cod_clc", title: "CLC" },
                { data: "invList", title: "Invoice" },
                //{ data: "application", title: "Application" },
                { data: "validate_clc", title: "Status" },
            ],
            columnDefs: [
                {
                    orderSequence: "desc",
                    targets: 0,
                    visible: false
                    // render:function(data){
                    //     if (data == null){
                    //         return '--';
                    //     } else{
                    //         return moment(data).startOf('hour').fromNow();
                    //     }
                    // }
                },
                {
                    targets: 1,
                    width: "130px",
                    render: function(data, type, full, meta) {
                        return (
                            `
						<a href="` +
                            newURL +
                            `/` +
                            full["cod_clc_slug"] +
                            `/">
						` +
                            full["cod_clc"] +
                            `
						</a>
						`
                        );
                    }
                },

                {
                    targets: 3,
                    width: "90px",
                    className: "dt-center",
                    render: function(data, type, full, meta) {
                        var status = {
                            1: { title: "required", class: "m-badge--brand" },
                            2: { title: "Delivered", class: " m-badge--metal" },
                            3: {
                                title: "Blocked",
                                class: " m-badge--danger"
                            },
                            Blocked: {
                                title: "Blocked",
                                class: " m-badge--brand"
                            },
                            Approved: {
                                title: "Approved",
                                class: " m-badge--success"
                            },
                            5: { title: "Info", class: " m-badge--info" },
                            Rejected: {
                                title: "Rejected",
                                class: " m-badge--danger"
                            },
                            Pending: {
                                title: "Pending",
                                class: " m-badge--warning"
                            }
                        };
                        if (typeof status[data] === "undefined") {
                            return data;
                        }
                        return (
                            '<span class="m-badge ' +
                            status[data].class +
                            ' m-badge--wide">' +
                            status[data].title +
                            "</span>"
                        );
                    }
                },
                {
                    targets: 4,
                    width: "120px",
                    className: "dt-center",
                    title: "Actions",
                    orderable: false,
                    render: function(data, type, full, meta) {
                        if (
                            (full["modification_clc"] == "Splitted") &
                            (full["validate_clc"] != "Blocked")
                        ) {
                            return (
                                `
                                    <a href="/clcs/` +
                                full["cod_clc_slug"] +
                                `/edit" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Edit">
                                    <i class="la la-edit"></i>
                                    </a>

                                    <a onclick="event.preventDefault(); swal({
                                        title: 'Are you sure?',
                                        text: 'You wont be able to revert this!',
                                        type: 'warning',
                                        showCancelButton: true,
                                        confirmButtonText: 'Yes, delete it!'
                                    }).then(res => {
                                        if(res.value) {
                                            let form = document.getElementById('clc-delete-form');
                                            form.action = '/clcs/` +
                                full["cod_clc_slug"] +
                                `';
                                            form.submit();
                                        }
                                    });"
                                        class="btn-delete m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">
                                        <i class="la la-trash"></i>
                                    </a>
                                    <a href="clcs/splitted/create/` +
                                full["cod_clc_slug"] +
                                `" class="m-portlet__nav-link btn m-btn m-btn--hover-warning m-btn--icon m-btn--icon-only m-btn--pill btn-edit"  title="Break this CLC">
                                        <i class="la	la-unlink"></i>
                                    </a>
                                `
                            );
                        }
                        if (
                            full["inv"].length >= 2 &&
                            full["modification_clc"] !== "Splitted"
                        ) {
                            return (
                                `
                                    <a href="/clcs/` +
                                full["cod_clc_slug"] +
                                `/edit" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Edit">
                                    <i class="la la-edit"></i>
                                    </a>

                                    <a onclick="event.preventDefault(); swal({
                                        title: 'Are you sure?',
                                        text: 'You wont be able to revert this!',
                                        type: 'warning',
                                        showCancelButton: true,
                                        confirmButtonText: 'Yes, delete it!'
                                    }).then(res => {
                                        if(res.value) {
                                            let form = document.getElementById('clc-delete-form');
                                            form.action = '/clcs/` +
                                full["cod_clc_slug"] +
                                `';
                                            form.submit();
                                        }
                                    });"
                                        class="btn-delete m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">
                                        <i class="la la-trash"></i>
                                    </a>
                                    <a href="clcs/splitted/create/` +
                                full["cod_clc_slug"] +
                                `" class="m-portlet__nav-link btn m-btn m-btn--hover-warning m-btn--icon m-btn--icon-only m-btn--pill btn-edit"  title="Break this CLC">
                                        <i class="la	la-unlink"></i>
                                    </a>
                                `
                            );
                        }

                        return (
                            `
                                    <a href="/clcs/` +
                            full["cod_clc_slug"] +
                            `/edit" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Edit">
                                    <i class="la la-edit"></i>
                                    </a>

                                    <a onclick="event.preventDefault(); swal({
                                        title: 'Are you sure?',
                                        text: 'You wont be able to revert this!',
                                        type: 'warning',
                                        showCancelButton: true,
                                        confirmButtonText: 'Yes, delete it!'
                                    }).then(res => {
                                        if(res.value) {
                                            let form = document.getElementById('clc-delete-form');
                                            form.action = '/clcs/` +
                            full["cod_clc_slug"] +
                            `';
                                            form.submit();
                                        }
                                    });"
                                        class="btn-delete m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">
                                        <i class="la la-trash"></i>
                                    </a>
                                `
                        );
                    }
                }
            ]
        });

        var filter = function() {
            var val = $.fn.dataTable.util.escapeRegex($(this).val());
            table
                .column($(this).data("col-index"))
                .search(val ? val : "", false, false)
                .draw();
        };

        var asdasd = function(value, index) {
            var val = $.fn.dataTable.util.escapeRegex(value);
            table.column(index).search(val ? val : "", false, true);
        };

        $("#m_search").on("click", function(e) {
            e.preventDefault();
            var params = {};
            $(".m-input").each(function() {
                var i = $(this).data("col-index");
                if (params[i]) {
                    params[i] += "|" + $(this).val();
                } else {
                    params[i] = $(this).val();
                }
            });
            $.each(params, function(i, val) {
                // apply search params to datatable
                table.column(i).search(val ? val : "", false, false);
            });
            table.table().draw();
        });

        $("#m_reset").on("click", function(e) {
            e.preventDefault();
            $(".m-input").each(function() {
                $(this).val("");
                table
                    .column($(this).data("col-index"))
                    .search("", false, false);
            });
            table.table().draw();
        });

        $("#m_datepicker").datepicker({
            todayHighlight: true,
            templates: {
                leftArrow: '<i class="la la-angle-left"></i>',
                rightArrow: '<i class="la la-angle-right"></i>'
            }
        });
    };

    return {
        //main function to initiate the module
        init: function() {
            initTable1();
        }
    };
})();

$("#m_datepicker").datepicker({
    format: "yyyy-mm-dd"
});

jQuery(document).ready(function() {
    DatatablesSearchOptionsAdvancedSearch.init();
});

