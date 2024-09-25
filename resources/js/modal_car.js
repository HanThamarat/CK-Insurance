$(document).ready(function () {
    function updateLegend() {
        var textValue = $("#Vehicle_OldLicense_Text").val();
        var numberValue = $("#Vehicle_OldLicense_Number").val();
        var provinceText = $("#optionsList li.selected").text(); // เปลี่ยนเป็น optionsList

        var legendText;
        if (textValue || numberValue || provinceText !== "") {
            // ปรับเงื่อนไขตามต้องการ
            legendText =
                '<div style="text-align: center;">' +
                textValue +
                " " +
                numberValue +
                "<br>" +
                provinceText +
                "</div>";
        } else {
            legendText =
                '<div style="text-align: center;">ป้ายทะเบียนเก่า</div>';
        }

        $("#license-info").html(legendText);
    }

    // Event listeners
    $("#Vehicle_OldLicense_Text, #Vehicle_OldLicense_Number").on(
        "input change",
        function () {
            updateLegend();
        }
    );

    // Event listener for dropdown selection
    $("#optionsList li").on("click", function () {
        $("#dropdownInput").val($(this).text());
        $("#optionsList li").removeClass("selected"); // ลบคลาส selected จากทุกรายการ
        $(this).addClass("selected"); // เพิ่มคลาส selected ให้กับรายการที่เลือก
        updateLegend(); // อัปเดต legend
    });

    // Initial call to set the correct legend text
    updateLegend();
});

$(document).ready(function () {
    function updateLegend() {
        var textValueNew = $("#Vehicle_NewLicense_Text").val();
        var numberValueNew = $("#Vehicle_NewLicense_Number").val();
        var provinceTextNew = $("#optionsListNew li.selected").text(); // เปลี่ยนเป็น optionsList

        var legendText;
        if (textValueNew || numberValueNew || provinceTextNew !== "") {
            // ปรับเงื่อนไขตามต้องการ
            legendText =
                '<div style="text-align: center;">' +
                textValueNew +
                " " +
                numberValueNew +
                "<br>" +
                provinceTextNew +
                "</div>";
        } else {
            legendText =
                '<div style="text-align: center;">ป้ายทะเบียนเก่า</div>';
        }

        $("#licenseNew-info").html(legendText);
    }

    // Event listeners
    $("#Vehicle_NewLicense_Text, #Vehicle_NewLicense_Number").on(
        "input change",
        function () {
            updateLegend();
        }
    );

    // Event listener for dropdown selection
    $("#optionsListNew li").on("click", function () {
        $("#dropdownInputNew").val($(this).text());
        $("#optionsListNew li").removeClass("selected"); // ลบคลาส selected จากทุกรายการ
        $(this).addClass("selected"); // เพิ่มคลาส selected ให้กับรายการที่เลือก
        updateLegend(); // อัปเดต legend
    });

    // Initial call to set the correct legend text
    updateLegend();
});

$(document).ready(function () {
    // ตั้งค่าเริ่มต้นให้ input เป็น disabled
    $("#Vehicle_New_Number")
        .prop("disabled", true)
        .css("background-color", "#f0f0f0"); // เปลี่ยนสีพื้นหลังเป็นสีเทาอ่อน

    // เมื่อสถานะของ checkbox เปลี่ยนแปลง
    $('input[name="new_number_stamping"]').on("change", function () {
        if ($(this).is(":checked")) {
            // ถ้า checkbox ถูกเลือก
            $("#Vehicle_New_Number")
                .prop("disabled", false)
                .css("background-color", "#ffffff"); // เปลี่ยนสีพื้นหลังเป็นสีเทาอ่อน
        } else {
            // ถ้า checkbox ไม่ถูกเลือก
            $("#Vehicle_New_Number")
                .prop("disabled", true)
                .css("background-color", "#e0e0e0"); // เปลี่ยนสีพื้นหลังเป็นสีเทาเข้ม
        }
    });
});

$(document).ready(function () {
    // สำหรับ select-input-register
    $("#select-input-register").change(function () {
        var selectedValue = $(this).val();
        var now = new Date();
        var options = {
            timeZone: "Asia/Bangkok",
            year: "numeric",
            month: "2-digit",
            day: "2-digit",
            hour: "2-digit",
            minute: "2-digit",
            hour12: false,
        };

        if (selectedValue === "") {
            $("#date-stamp-register-1").val(""); // ล้างค่า
            $("#date-stamp-register-2").val(""); // ล้างค่า
            return;
        }

        var currentDateTime = now
            .toLocaleString("th-TH", options)
            .replace(",", ""); // Format: DD/MM/YYYY HH:MM

        if (selectedValue === "7-days") {
            now.setDate(now.getDate() + 7);
        } else if (selectedValue === "1-year") {
            now.setFullYear(now.getFullYear() + 1);
        } else {
            return;
        }

        var futureDateTime = now
            .toLocaleString("th-TH", options)
            .replace(",", ""); // Format: DD/MM/YYYY HH:MM

        $("#date-stamp-register-1").val(currentDateTime);
        $("#date-stamp-register-2").val(futureDateTime);
    });

    // สำหรับ select-input-act
    $("#select-input-act").change(function () {
        var selectedValue = $(this).val();
        var now = new Date();
        var options = {
            timeZone: "Asia/Bangkok",
            year: "numeric",
            month: "2-digit",
            day: "2-digit",
            hour: "2-digit",
            minute: "2-digit",
            hour12: false,
        };

        if (selectedValue === "") {
            $("#date-stamp-act-1").val(""); // ล้างค่า
            $("#date-stamp-act-2").val(""); // ล้างค่า
            return;
        }

        var currentDateTime = now
            .toLocaleString("th-TH", options)
            .replace(",", ""); // Format: DD/MM/YYYY HH:MM

        if (selectedValue === "7-days") {
            now.setDate(now.getDate() + 7);
        } else if (selectedValue === "1-year") {
            now.setFullYear(now.getFullYear() + 1);
        } else {
            return;
        }

        var futureDateTime = now
            .toLocaleString("th-TH", options)
            .replace(",", ""); // Format: DD/MM/YYYY HH:MM

        $("#date-stamp-act-1").val(currentDateTime);
        $("#date-stamp-act-2").val(futureDateTime);
    });

    // สำหรับ select-input-insurance
    $("#select-input-insurance").change(function () {
        var selectedValue = $(this).val();
        var now = new Date();
        var options = {
            timeZone: "Asia/Bangkok",
            year: "numeric",
            month: "2-digit",
            day: "2-digit",
            hour: "2-digit",
            minute: "2-digit",
            hour12: false,
        };

        if (selectedValue === "") {
            $("#date-stamp-insurance-1").val(""); // ล้างค่า
            $("#date-stamp-insurance-2").val(""); // ล้างค่า
            return;
        }

        var currentDateTime = now
            .toLocaleString("th-TH", options)
            .replace(",", ""); // Format: DD/MM/YYYY HH:MM

        if (selectedValue === "7-days") {
            now.setDate(now.getDate() + 7);
        } else if (selectedValue === "1-year") {
            now.setFullYear(now.getFullYear() + 1);
        } else {
            return;
        }

        var futureDateTime = now
            .toLocaleString("th-TH", options)
            .replace(",", ""); // Format: DD/MM/YYYY HH:MM

        $("#date-stamp-insurance-1").val(currentDateTime);
        $("#date-stamp-insurance-2").val(futureDateTime);
    });
});

$(document).ready(function () {
    // ซ่อน tooltip ตอนเริ่มต้น
    $("#tooltip").hide();

    // แสดง tooltip เมื่อ hover ที่ input
    $("#Vehicle_OldLicense_Text").hover(
        function () {
            $("#tooltip").show();
        },
        function () {
            $("#tooltip").hide();
        }
    );

    // ซ่อน tooltip เมื่อ input ถูก focus
    $("#Vehicle_OldLicense_Text").focus(function () {
        $("#tooltip").hide();
    });

    // เมื่อคลิกออกจาก input แล้ว hover กลับมาให้ tooltip แสดง
    $("#Vehicle_OldLicense_Text").blur(function () {
        $("#Vehicle_OldLicense_Text").hover(
            function () {
                $("#tooltip").show();
            },
            function () {
                $("#tooltip").hide();
            }
        );
    });
});

$(document).ready(function () {
    // ซ่อน tooltip ตอนเริ่มต้น
    $("#tooltip-number").hide();

    // แสดง tooltip เมื่อ hover ที่ input
    $("#Vehicle_OldLicense_Number").hover(
        function () {
            $("#tooltip-number").show();
        },
        function () {
            $("#tooltip-number").hide();
        }
    );

    // ซ่อน tooltip เมื่อ input ถูก focus
    $("#Vehicle_OldLicense_Number").focus(function () {
        $("#tooltip-number").hide();
    });

    // เมื่อคลิกออกจาก input แล้ว hover กลับมาให้ tooltip แสดง
    $("#Vehicle_OldLicense_Number").blur(function () {
        $("#Vehicle_OldLicense_Number").hover(
            function () {
                $("#tooltip-number").show();
            },
            function () {
                $("#tooltip-number").hide();
            }
        );
    });
});

$(document).ready(function () {
    // ซ่อน tooltip ตอนเริ่มต้น
    $("#tooltip-new-text, #tooltip-new-number").hide();

    // แสดง tooltip เมื่อ hover ที่ input
    $("#Vehicle_NewLicense_Text").hover(
        function () {
            $("#tooltip-new-text").show();
        },
        function () {
            $("#tooltip-new-text").hide();
        }
    );

    $("#Vehicle_NewLicense_Number").hover(
        function () {
            $("#tooltip-new-number").show();
        },
        function () {
            $("#tooltip-new-number").hide();
        }
    );

    // ซ่อน tooltip เมื่อ input ถูก focus
    $("#Vehicle_NewLicense_Text").focus(function () {
        $("#tooltip-new-text").hide();
    });

    $("#Vehicle_NewLicense_Number").focus(function () {
        $("#tooltip-new-number").hide();
    });

    // เมื่อคลิกออกจาก input แล้ว hover กลับมาให้ tooltip แสดง
    $("#Vehicle_NewLicense_Text").blur(function () {
        $("#Vehicle_NewLicense_Text").hover(
            function () {
                $("#tooltip-new-text").show();
            },
            function () {
                $("#tooltip-new-text").hide();
            }
        );
    });

    $("#Vehicle_NewLicense_Number").blur(function () {
        $("#Vehicle_NewLicense_Number").hover(
            function () {
                $("#tooltip-new-number").show();
            },
            function () {
                $("#tooltip-new-number").hide();
            }
        );
    });
});

$(document).ready(function () {
    // ซ่อน tooltip ตอนเริ่มต้น
    $("#tooltip-chassis").hide();

    // แสดง tooltip เมื่อ hover ที่ input
    $("#Vehicle_Chassis").hover(
        function () {
            $("#tooltip-chassis").show();
        },
        function () {
            $("#tooltip-chassis").hide();
        }
    );

    // ซ่อน tooltip เมื่อ input ถูก focus
    $("#Vehicle_Chassis").focus(function () {
        $("#tooltip-chassis").hide();
    });

    // เมื่อคลิกออกจาก input แล้ว hover กลับมาให้ tooltip แสดง
    $("#Vehicle_Chassis").blur(function () {
        $("#Vehicle_Chassis").hover(
            function () {
                $("#tooltip-chassis").show();
            },
            function () {
                $("#tooltip-chassis").hide();
            }
        );
    });
});

$(document).ready(function () {
    // เมื่อคลิกที่แท็ก <a>
    $('a[data-bs-toggle="modal"]').on("click", function (e) {
        e.preventDefault(); // ป้องกันการกระโดดไปที่ลิงก์

        // รับค่าจากชื่อของการ์ดที่ถูกคลิก
        const target = $(this).find("h5").text();

        // ซ่อนทุก <div> ที่มี id ที่ต้องการแสดงผล
        $("#car-detail, #motor-detail").hide();

        // แสดง <div> ที่ตรงกับชื่อการ์ด
        if (target === "รถยนต์") {
            $("#car-detail").show();
        } else if (target === "มอเตอร์ไซค์") {
            $("#motor-detail").show();
        }
    });
});

$(document).ready(function () {
    var selectedProvince = null;

    // Function to populate the dropdown list based on search input
    function populateOptions(search = "") {
        $("#optionsList li").each(function () {
            var optionText = $(this).text();
            $(this).toggle(
                optionText.toLowerCase().includes(search.toLowerCase())
            );
        });

        var visibleOptions = $("#optionsList li:visible");
        if (visibleOptions.length > 0) {
            $("#noResultsMessage").hide();
        } else {
            $("#noResultsMessage").show();
        }
    }

    // Toggle dropdown visibility
    $("#dropdownInput").on("click", function () {
        $("#dropdownList").toggle();
        $("#searchInput").toggle().focus();
        populateOptions();
    });

    // Handle option selection
    $(document).on("click", "#optionsList li", function () {
        selectedProvince = $(this).data("key");
        $("#dropdownInput").val($(this).text()).removeClass("text-gray-500");
        $("#dropdownList").hide();
        $("#searchInput").hide();
    });

    // Filter options based on search input
    $("#searchInput").on("input", function () {
        var searchValue = $(this).val();
        populateOptions(searchValue);
    });

    // Close dropdown when clicking outside
    $(document).on("click", function (e) {
        if (!$(e.target).closest("#dropdownInput, #dropdownList").length) {
            $("#dropdownList").hide();
            $("#searchInput").hide();
        }
    });
});

$(document).ready(function () {
    var selectedProvince = null;

    // Function to populate the dropdown list based on search input
    function populateOptions(search = "") {
        $("#optionsListNew li").each(function () {
            var optionText = $(this).text();
            $(this).toggle(
                optionText.toLowerCase().includes(search.toLowerCase())
            );
        });

        var visibleOptions = $("#optionsListNew li:visible");
        if (visibleOptions.length > 0) {
            $("#noResultsMessageNew").hide();
        } else {
            $("#noResultsMessageNew").show();
        }
    }

    // Toggle dropdown visibility
    $("#dropdownInputNew").on("click", function () {
        $("#dropdownListNew").toggle();
        $("#searchInputNew").toggle().focus();
        populateOptions();
    });

    // Handle option selection
    $(document).on("click", "#optionsListNew li", function () {
        selectedProvince = $(this).data("key");
        $("#dropdownInputNew").val($(this).text()).removeClass("text-gray-500");
        $("#dropdownListNew").hide();
        $("#searchInputNew").hide();
    });

    // Filter options based on search input
    $("#searchInputNew").on("input", function () {
        var searchValue = $(this).val();
        populateOptions(searchValue);
    });

    // Close dropdown when clicking outside
    $(document).on("click", function (e) {
        if (
            !$(e.target).closest("#dropdownInputNew, #dropdownListNew").length
        ) {
            $("#dropdownListNew").hide();
            $("#searchInputNew").hide();
        }
    });
});
