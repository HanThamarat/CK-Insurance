
<style>
    #preloader .loader {
        border: 8px solid #f3f3f3; /* สีพื้นหลัง */
        border-top: 8px solid #ff8400; /* สีของวงกลมที่หมุน */
        border-radius: 50%; /* ทำให้เป็นวงกลม */
        width: 50px; /* ขนาดของวงกลม */
        height: 50px; /* ขนาดของวงกลม */
        animation: spin 0.7s linear infinite; /* การหมุนเร็วขึ้น */
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    /* กำหนดสีพื้นหลังให้กับ select ที่ถูก disabled */
    .disabled-select {
        background-color: #e5e7eb; /* สีเทาอ่อน */
        color: #6b7280; /* สีเทาเข้มสำหรับข้อความ */
    }

    .disabled-input {
        background-color: #e5e7eb; /* สีเทาอ่อน */
        color: #6b7280; /* สีเทาเข้มสำหรับข้อความ */
        cursor: not-allowed; /* เปลี่ยนเคอร์เซอร์เมื่อ hover */
    }


    /* สไตล์สำหรับ placeholder สีแดง */
    .red-placeholder::placeholder {
        color: #ff4d4d; /* สีแดง */
        opacity: 1; /* ปรับค่าความทึบให้สูงขึ้น */
    }

    .red-option {
        color: red;
        font-weight: bold; /* เพิ่มความหนาของตัวอักษร */
    }


    /*--------------- Checkbox Type new_number_stamping --------------*/
    .checkbox-wrapper-19 {
        box-sizing: border-box;
        --background-color: #fff;
        --checkbox-height: 25px;
    }

    @-moz-keyframes dothabottomcheck-19 {
    0% {
        height: 0;
    }

    100% {
        height: calc(var(--checkbox-height) / 2);
    }
    }

    @-webkit-keyframes dothabottomcheck-19 {
    0% {
        height: 0;
    }

    100% {
        height: calc(var(--checkbox-height) / 2);
    }
    }

    @keyframes dothabottomcheck-19 {
    0% {
        height: 0;
    }

    100% {
        height: calc(var(--checkbox-height) / 2);
    }
    }

    @keyframes dothatopcheck-19 {
    0% {
        height: 0;
    }

    50% {
        height: 0;
    }

    100% {
        height: calc(var(--checkbox-height) * 1.2);
    }
    }

    @-webkit-keyframes dothatopcheck-19 {
    0% {
        height: 0;
    }

    50% {
        height: 0;
    }

    100% {
        height: calc(var(--checkbox-height) * 1.2);
    }
    }

    @-moz-keyframes dothatopcheck-19 {
    0% {
        height: 0;
    }

    50% {
        height: 0;
    }

    100% {
        height: calc(var(--checkbox-height) * 1.2);
    }
    }

    .checkbox-wrapper-19 input[type=checkbox] {
    display: none;
    }

    .checkbox-wrapper-19 .check-box {
        height: var(--checkbox-height);
        width: var(--checkbox-height);
        background-color: transparent;
        border: calc(var(--checkbox-height) * .1) solid #757575;
        border-radius: 5px;
        position: relative;
        display: inline-block;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        -moz-transition: border-color ease 0.2s;
        -o-transition: border-color ease 0.2s;
        -webkit-transition: border-color ease 0.2s;
        transition: border-color ease 0.2s;
        cursor: pointer;
    }

    .checkbox-wrapper-19 .check-box::before,
    .checkbox-wrapper-19 .check-box::after {
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        position: absolute;
        height: 0;
        width: calc(var(--checkbox-height) * .2);
        background-color: #34b93d;
        display: inline-block;
        -moz-transform-origin: left top;
        -ms-transform-origin: left top;
        -o-transform-origin: left top;
        -webkit-transform-origin: left top;
        transform-origin: left top;
        border-radius: 5px;
        content: " ";
        -webkit-transition: opacity ease 0.5;
        -moz-transition: opacity ease 0.5;
        transition: opacity ease 0.5;
    }

    .checkbox-wrapper-19 .check-box::before {
        top: calc(var(--checkbox-height) * .72);
        left: calc(var(--checkbox-height) * .41);
        box-shadow: 0 0 0 calc(var(--checkbox-height) * .05) var(--background-color);
        -moz-transform: rotate(-135deg);
        -ms-transform: rotate(-135deg);
        -o-transform: rotate(-135deg);
        -webkit-transform: rotate(-135deg);
        transform: rotate(-135deg);
    }

    .checkbox-wrapper-19 .check-box::after {
        top: calc(var(--checkbox-height) * .37);
        left: calc(var(--checkbox-height) * .05);
        -moz-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        -o-transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    .checkbox-wrapper-19 input[type=checkbox]:checked + .check-box,
    .checkbox-wrapper-19 .check-box.checked {
        border-color: #34b93d;
    }

    .checkbox-wrapper-19 input[type=checkbox]:checked + .check-box::after,
    .checkbox-wrapper-19 .check-box.checked::after {
        height: calc(var(--checkbox-height) / 2);
        -moz-animation: dothabottomcheck-19 0.2s ease 0s forwards;
        -o-animation: dothabottomcheck-19 0.2s ease 0s forwards;
        -webkit-animation: dothabottomcheck-19 0.2s ease 0s forwards;
        animation: dothabottomcheck-19 0.2s ease 0s forwards;
    }

    .checkbox-wrapper-19 input[type=checkbox]:checked + .check-box::before,
    .checkbox-wrapper-19 .check-box.checked::before {
        height: calc(var(--checkbox-height) * 1.2);
        -moz-animation: dothatopcheck-19 0.4s ease 0s forwards;
        -o-animation: dothatopcheck-19 0.4s ease 0s forwards;
        -webkit-animation: dothatopcheck-19 0.4s ease 0s forwards;
        animation: dothatopcheck-19 0.4s ease 0s forwards;
    }

    body {
        background-image: url('{{ asset('images/home.jpg') }}');
        background-size: cover;
        /* ขยายภาพให้ครอบคลุมพื้นที่ */
        background-position: center;
        /* จัดตำแหน่งภาพที่ตรงกลาง */
        background-repeat: no-repeat;
        /* ไม่ทำซ้ำภาพ */
        background-blend-mode: overlay;
        /* ผสมสีพื้นหลังกับภาพพื้นหลัง */
    }
</style>
