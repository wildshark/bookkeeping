<?php

function menu($token){

    return"
        <div class='logo'><a href='index.html'>
            <!-- <img src='assets/images/logo.png' alt='' /> --><span>Qus Account</span></a></div>
        <li class='label'>Main</li>
        <li><a href='?_page=dashboard&token={$token}'><i class='ti-email'></i> Dashboard </a></li>

        <li class='label'>Financial Transaction</li>
        <li><a class='sidebar-sub-toggle'><i class='ti-bar-chart-alt'></i> Books <span
                class='sidebar-collapse-icon ti-angle-down'></span></a>
        <ul>
            <li><a href='?_page=income&token={$token}'>Income transaction</a></li>
            <li><a href='?_page=expenses&token={$token}'>Expenses Transaction</a></li>
            <li><a href='?_page=cash&token={$token}'>Cash Book</a></li>
            <li><a href='?_page=bank&token={$token}'>Bank Book</a></li>
            <li><a href='?_page=payroll&token={$token}'>Payroll</a></li>
        </ul>
        </li>
        <li><a href='#' data-toggle='modal' data-target='#incomeModalCenter'><i class='ti-calendar'></i> Income </a></li>
        <li><a href='#' data-toggle='modal' data-target='#expensesModalCenter'><i class='ti-email'></i> Expenses</a></li>
        <li><a class='sidebar-sub-toggle'><i class='ti-bar-chart-alt'></i> Report <span
                class='sidebar-collapse-icon ti-angle-down'></span></a>
        <ul>
            <li><a href='?_page=ledger&token={$token}'> Ledgers</a></li>
            <li><a href='?_page=report&token={$token}'> Finanical Report</a></li>
        </ul>
        <li><a href='#' data-toggle='modal' data-target='#exampleModalCenter'><i class='ti-email'></i> Financal Report</a></li>

        <li><a class='sidebar-sub-toggle'><i class='ti-layout'></i> Setting <span
                class='sidebar-collapse-icon ti-angle-down'></span></a>
        <ul>
            <li><a href='?_page=category&token={$token}'> category</a></li>
            <li><a href='?_page=user&token={$token}'>User </a></li>
        </ul>
        </li>

        <li><a><i class='ti-close'></i> Logout</a></li>
    ";
}

?>