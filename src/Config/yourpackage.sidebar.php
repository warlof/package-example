<?php
/*
This file is part of SeAT

Copyright (C) 2015, 2017  Leon Jacobs

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*/

return [

    // Integrating with the SeAT menu is defined here.
    // Refer to the web package for a structure reference.
    'yourpackage' => [
        'name' => 'Your Package',
        'icon' => 'fa-cogs',
        'route_segment' => 'yourpackage',
        'entries' => [
            [
                'name' => 'Sub Level',
                'icon' => 'fa-th-list',
                'route' => 'home'
            ]
        ]
    ]

];
