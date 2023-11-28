<?php
// Check if a sort option is selected
// $sortOption = isset($_GET['sort']) ? $_GET['sort'] : 'default';
?>
<!--
<div class="dropdown">
    <select id="sortDropdown" onchange="sortTable('violationList', this.value)">
        <option value="default" <?php // echo ($sortOption == 'default') ? 'selected' : ''; ?>>Filter by Paid</option>
        <option value="option1" <?php // echo ($sortOption == 'option1') ? 'selected' : ''; ?>>Filter by Unpaid</option>
        
    </select>
</div>

-->

<div class="dropdown">
    <select id="filter-dropdown">
        <option value="default" <?php // echo ($sortOption == 'default') ? 'selected' : ''; ?>>Filter by Paid</option>
        <option value="option1" <?php // echo ($sortOption == 'option1') ? 'selected' : ''; ?>>Filter by Unpaid</option>
        
    </select>
</div>

