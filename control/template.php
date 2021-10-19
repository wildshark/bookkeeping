<?php

function menu($token){

    return"
        <div class='logo'><a href='index.html'>
            <!-- <img src='assets/images/logo.png' alt='' /> --><span>Focus</span></a></div>
        <li class='label'>Main</li>
        <li><a href='?_page=dashboard&token={$token}'><i class='ti-email'></i> Dashboard </a></li>

        <li class='label'>Apps</li>
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
        <li><a href='app-event-calender.html'><i class='ti-calendar'></i> Income </a></li>
        <li><a href='app-email.html'><i class='ti-email'></i> Expenses</a></li>
        <li><a href='app-email.html'><i class='ti-email'></i> Financal Report</a></li>

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