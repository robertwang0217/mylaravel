<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertSampleData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // insert sample data
        DB::statement("
            INSERT INTO `properties` (`id`, `created_at`, `updated_at`, `suburb`, `state`, `country`, `guid`)
            VALUES
                (1, NULL, NULL, 'Parramatta', 'NSW', 'Australia', ''),
                (2, NULL, NULL, 'Parramatta', 'NSW', 'Australia', ''),
                (3, NULL, NULL, 'Parramatta', 'NSW', 'Australia', ''),
                (4, NULL, NULL, 'Parramatta', 'NSW', 'Australia', ''),
                (5, NULL, NULL, 'Parramatta', 'NSW', 'Australia', ''),
                (6, NULL, NULL, 'Parramatta', 'NSW', 'Australia', ''),
                (7, NULL, NULL, 'Parramatta', 'NSW', 'Australia', ''),
                (8, NULL, NULL, 'Parramatta', 'NSW', 'Australia', ''),
                (9, NULL, NULL, 'Parramatta', 'NSW', 'Australia', ''),
                (10, NULL, NULL, 'Parramatta', 'NSW', 'Australia', ''),
                (11, NULL, NULL, 'Parramatta', 'NSW', 'Australia', ''),
                (12, NULL, NULL, 'Parramatta', 'NSW', 'Australia', ''),
                (13, NULL, NULL, 'Parramatta', 'NSW', 'Australia', ''),
                (14, NULL, NULL, 'Parramatta', 'NSW', 'Australia', ''),
                (15, NULL, NULL, 'Ryde', 'NSW', 'Australia', ''),
                (16, NULL, NULL, 'Ryde', 'NSW', 'Australia', ''),
                (17, NULL, NULL, 'Ryde', 'NSW', 'Australia', ''),
                (18, NULL, NULL, 'Ryde', 'NSW', 'Australia', ''),
                (19, NULL, NULL, 'Ryde', 'NSW', 'Australia', ''),
                (20, NULL, NULL, 'Castle Hill', 'NSW', 'Australia', ''),
                (21, NULL, NULL, 'Richmond', 'NSW', 'Australia', ''),
                (22, NULL, NULL, 'Richmond', 'NSW', 'Australia', ''),
                (23, NULL, NULL, 'Richmond', 'NSW', 'Australia', ''),
                (24, NULL, NULL, 'Richmond', 'NSW', 'Australia', ''),
                (25, NULL, NULL, 'Richmond', 'NSW', 'Australia', ''),
                (26, NULL, NULL, 'Richmond', 'NSW', 'Australia', ''),
                (27, NULL, NULL, 'Richmond', 'NSW', 'Australia', ''),
                (28, NULL, NULL, 'Richmond', 'NSW', 'Australia', ''),
                (29, NULL, NULL, 'Richmond', 'NSW', 'Australia', ''),
                (30, NULL, NULL, 'Richmond', 'NSW', 'Australia', ''),
                (31, NULL, NULL, 'Richmond', 'NSW', 'Australia', ''),
                (32, NULL, NULL, 'Richmond', 'NSW', 'Australia', ''),
                (33, NULL, NULL, 'Richmond', 'NSW', 'Australia', ''),
                (34, NULL, NULL, 'Richmond', 'NSW', 'Australia', ''),
                (35, NULL, NULL, 'Richmond', 'NSW', 'Australia', ''),
                (36, NULL, NULL, 'Richmond', 'NSW', 'Australia', ''),
                (37, NULL, NULL, 'Southbank', 'Qld', 'Australia', ''),
                (38, NULL, NULL, 'Southbank', 'Qld', 'Australia', ''),
                (39, NULL, NULL, 'Southbank', 'Qld', 'Australia', ''),
                (40, NULL, NULL, 'Southbank', 'Qld', 'Australia', ''),
                (41, NULL, NULL, 'Southbank', 'Qld', 'Australia', ''),
                (42, NULL, NULL, 'Southbank', 'Qld', 'Australia', ''),
                (43, NULL, NULL, 'Southbank', 'Qld', 'Australia', ''),
                (44, NULL, NULL, 'Southbank', 'Qld', 'Australia', ''),
                (45, NULL, NULL, 'Southbank', 'Qld', 'Australia', ''),
                (46, NULL, NULL, 'Southbank', 'Qld', 'Australia', ''),
                (47, NULL, NULL, 'Southbank', 'Qld', 'Australia', ''),
                (48, NULL, NULL, 'Southbank', 'Qld', 'Australia', ''),
                (49, NULL, NULL, 'O\'Sullivan Beach', 'Qld', 'Australia', ''),
                (50, NULL, NULL, 'O\'Sullivan Beach', 'Qld', 'Australia', ''),
                (51, NULL, NULL, 'O\'Sullivan Beach', 'Qld', 'Australia', ''),
                (52, NULL, NULL, 'O\'Sullivan Beach', 'Qld', 'Australia', ''),
                (53, NULL, NULL, 'O\'Sullivan Beach', 'Qld', 'Australia', ''),
                (54, NULL, NULL, 'O\'Sullivan Beach', 'Qld', 'Australia', ''),
                (55, NULL, NULL, 'O\'Sullivan Beach', 'Qld', 'Australia', ''),
                (56, NULL, NULL, 'O\'Sullivan Beach', 'Qld', 'Australia', ''),
                (57, NULL, NULL, 'Geelong', 'Vic', 'Australia', ''),
                (58, NULL, NULL, 'Geelong', 'Vic', 'Australia', ''),
                (59, NULL, NULL, 'Geelong', 'Vic', 'Australia', ''),
                (60, NULL, NULL, 'Geelong', 'Vic', 'Australia', ''),
                (61, NULL, NULL, 'Geelong', 'Vic', 'Australia', ''),
                (62, NULL, NULL, 'Geelong', 'Vic', 'Australia', ''),
                (63, NULL, NULL, 'Geelong', 'Vic', 'Australia', ''),
                (64, NULL, NULL, 'Geelong', 'Vic', 'Australia', ''),
                (65, NULL, NULL, 'Geelong', 'Vic', 'Australia', ''),
                (66, NULL, NULL, 'Geelong', 'Vic', 'Australia', ''),
                (67, NULL, NULL, 'Geelong', 'Vic', 'Australia', ''),
                (68, NULL, NULL, 'Geelong', 'Vic', 'Australia', ''),
                (69, NULL, NULL, 'Geelong', 'Vic', 'Australia', ''),
                (70, NULL, NULL, 'Geelong', 'Vic', 'Australia', ''),
                (71, NULL, NULL, 'Geelong', 'Vic', 'Australia', ''),
                (72, NULL, NULL, 'Geelong', 'Vic', 'Australia', ''),
                (73, NULL, NULL, 'Fitzroy', 'Vic', 'Australia', ''),
                (74, NULL, NULL, 'Richmond', 'Vic', 'Australia', ''),
                (75, NULL, NULL, 'Richmond', 'Vic', 'Australia', ''),
                (76, NULL, NULL, 'Richmond', 'Vic', 'Australia', ''),
                (77, NULL, NULL, 'Richmond', 'Vic', 'Australia', ''),
                (78, NULL, NULL, 'Richmond', 'Vic', 'Australia', ''),
                (79, NULL, NULL, 'Richmond', 'Vic', 'Australia', ''),
                (80, NULL, NULL, 'Richmond', 'Vic', 'Australia', ''),
                (81, NULL, NULL, 'Richmond', 'Vic', 'Australia', ''),
                (82, NULL, NULL, 'Richmond', 'Vic', 'Australia', ''),
                (83, NULL, NULL, 'Richmond', 'Vic', 'Australia', ''),
                (84, NULL, NULL, 'Richmond', 'Vic', 'Australia', ''),
                (85, NULL, NULL, 'Richmond', 'Vic', 'Australia', ''),
                (86, NULL, NULL, 'Richmond', 'Vic', 'Australia', ''),
                (87, NULL, NULL, 'Richmond', 'Vic', 'Australia', ''),
                (88, NULL, NULL, 'Richmond', 'Vic', 'Australia', ''),
                (89, NULL, NULL, 'Richmond', 'Vic', 'Australia', ''),
                (90, NULL, NULL, 'Richmond', 'Vic', 'Australia', ''),
                (91, NULL, NULL, 'Richmond', 'Vic', 'Australia', ''),
                (92, NULL, NULL, 'Richmond', 'Vic', 'Australia', ''),
                (93, NULL, NULL, 'Subiaco', 'WA', 'Australia', ''),
                (94, NULL, NULL, 'Subiaco', 'WA', 'Australia', ''),
                (95, NULL, NULL, 'Subiaco', 'WA', 'Australia', ''),
                (96, NULL, NULL, 'Subiaco', 'WA', 'Australia', ''),
                (97, NULL, NULL, 'Subiaco', 'WA', 'Australia', ''),
                (98, NULL, NULL, 'Subiaco', 'WA', 'Australia', ''),
                (99, NULL, NULL, 'Subiaco', 'WA', 'Australia', ''),
                (100, NULL, NULL, 'Subiaco', 'WA', 'Australia', '');

        ");

        DB::statement("
            INSERT INTO `analytic_types` (`id`, `created_at`, `updated_at`, `name`, `units`, `is_numeric`, `num_decimal_places`)
            VALUES
                (1, NULL, NULL, 'max_Bld_Height_m', 'm', 1, 1),
                (2, NULL, NULL, 'min_lot_size_m2', 'm2', 1, 0),
                (3, NULL, NULL, 'fsr', ':1', 1, 2);

        ");

        DB::statement("
            INSERT INTO `property_analytics` (`id`, `created_at`, `updated_at`, `property_id`, `analytic_type_id`, `value`)
            VALUES
                (435, NULL, NULL, 1, 1, '17'),
                (436, NULL, NULL, 2, 1, '21'),
                (437, NULL, NULL, 3, 1, '29'),
                (438, NULL, NULL, 4, 1, '16'),
                (439, NULL, NULL, 5, 1, '17'),
                (440, NULL, NULL, 6, 1, '15'),
                (441, NULL, NULL, 7, 1, '21'),
                (442, NULL, NULL, 8, 1, '10'),
                (443, NULL, NULL, 9, 1, '14'),
                (444, NULL, NULL, 10, 1, '24'),
                (445, NULL, NULL, 11, 1, '26'),
                (446, NULL, NULL, 12, 1, '12'),
                (447, NULL, NULL, 13, 1, '22'),
                (448, NULL, NULL, 14, 1, '22'),
                (449, NULL, NULL, 15, 1, '34'),
                (450, NULL, NULL, 16, 1, '10'),
                (451, NULL, NULL, 17, 1, '34'),
                (452, NULL, NULL, 18, 1, '34'),
                (453, NULL, NULL, 19, 1, '17'),
                (454, NULL, NULL, 20, 1, '28'),
                (455, NULL, NULL, 21, 1, '11'),
                (456, NULL, NULL, 22, 1, '22'),
                (457, NULL, NULL, 23, 1, '30'),
                (458, NULL, NULL, 24, 1, '11'),
                (459, NULL, NULL, 25, 1, '35'),
                (460, NULL, NULL, 26, 1, '11'),
                (461, NULL, NULL, 27, 1, '37'),
                (462, NULL, NULL, 28, 1, '13'),
                (463, NULL, NULL, 29, 1, '38'),
                (464, NULL, NULL, 30, 1, '29'),
                (465, NULL, NULL, 31, 1, '34'),
                (466, NULL, NULL, 32, 1, '28'),
                (467, NULL, NULL, 33, 1, '17'),
                (468, NULL, NULL, 34, 1, '11'),
                (469, NULL, NULL, 35, 1, '12'),
                (470, NULL, NULL, 36, 1, '20'),
                (471, NULL, NULL, 37, 1, '39'),
                (472, NULL, NULL, 38, 1, '17'),
                (473, NULL, NULL, 39, 1, '35'),
                (474, NULL, NULL, 40, 1, '28'),
                (475, NULL, NULL, 41, 1, '31'),
                (476, NULL, NULL, 42, 1, '19'),
                (477, NULL, NULL, 43, 1, '13'),
                (478, NULL, NULL, 44, 1, '25'),
                (479, NULL, NULL, 45, 1, '39'),
                (480, NULL, NULL, 46, 1, '22'),
                (481, NULL, NULL, 47, 1, '17'),
                (482, NULL, NULL, 48, 1, '17'),
                (483, NULL, NULL, 49, 1, '27'),
                (484, NULL, NULL, 50, 1, '25'),
                (485, NULL, NULL, 51, 1, '39'),
                (486, NULL, NULL, 52, 1, '20'),
                (487, NULL, NULL, 53, 1, '23'),
                (488, NULL, NULL, 54, 1, '15'),
                (489, NULL, NULL, 55, 1, '39'),
                (490, NULL, NULL, 56, 1, '27'),
                (491, NULL, NULL, 57, 1, '36'),
                (492, NULL, NULL, 58, 1, '31'),
                (493, NULL, NULL, 59, 1, '17'),
                (494, NULL, NULL, 60, 1, '33'),
                (495, NULL, NULL, 61, 1, '14'),
                (496, NULL, NULL, 62, 1, '13'),
                (497, NULL, NULL, 63, 1, '26'),
                (498, NULL, NULL, 64, 1, '10'),
                (499, NULL, NULL, 65, 1, '34'),
                (500, NULL, NULL, 66, 1, '23'),
                (501, NULL, NULL, 67, 1, '16'),
                (502, NULL, NULL, 68, 1, '18'),
                (503, NULL, NULL, 69, 1, '15'),
                (504, NULL, NULL, 70, 1, '18'),
                (505, NULL, NULL, 71, 1, '18'),
                (506, NULL, NULL, 72, 1, '23'),
                (507, NULL, NULL, 73, 1, '36'),
                (508, NULL, NULL, 74, 1, '34'),
                (509, NULL, NULL, 75, 1, '23'),
                (510, NULL, NULL, 76, 1, '29'),
                (511, NULL, NULL, 77, 1, '32'),
                (512, NULL, NULL, 78, 1, '33'),
                (513, NULL, NULL, 79, 1, '36'),
                (514, NULL, NULL, 80, 1, '37'),
                (515, NULL, NULL, 81, 1, '22'),
                (516, NULL, NULL, 82, 1, '12'),
                (517, NULL, NULL, 83, 1, '16'),
                (518, NULL, NULL, 84, 1, '9'),
                (519, NULL, NULL, 85, 1, '9'),
                (520, NULL, NULL, 86, 1, '20'),
                (521, NULL, NULL, 87, 1, '14'),
                (522, NULL, NULL, 88, 1, '15'),
                (523, NULL, NULL, 89, 1, '17'),
                (524, NULL, NULL, 90, 1, '15'),
                (525, NULL, NULL, 91, 1, '10'),
                (526, NULL, NULL, 92, 1, '22'),
                (527, NULL, NULL, 93, 1, '21'),
                (528, NULL, NULL, 94, 1, '16'),
                (529, NULL, NULL, 95, 1, '11'),
                (530, NULL, NULL, 96, 1, '33'),
                (531, NULL, NULL, 97, 1, '36'),
                (532, NULL, NULL, 98, 1, '34'),
                (533, NULL, NULL, 99, 1, '13'),
                (534, NULL, NULL, 100, 1, '33'),
                (535, NULL, NULL, 2, 2, '340'),
                (536, NULL, NULL, 3, 2, '823'),
                (537, NULL, NULL, 4, 2, '821'),
                (538, NULL, NULL, 6, 2, '1095'),
                (539, NULL, NULL, 8, 2, '1101'),
                (540, NULL, NULL, 9, 2, '970'),
                (541, NULL, NULL, 10, 2, '1049'),
                (542, NULL, NULL, 12, 2, '184'),
                (543, NULL, NULL, 14, 2, '192'),
                (544, NULL, NULL, 15, 2, '939'),
                (545, NULL, NULL, 16, 2, '745'),
                (546, NULL, NULL, 18, 2, '749'),
                (547, NULL, NULL, 20, 2, '428'),
                (548, NULL, NULL, 21, 2, '277'),
                (549, NULL, NULL, 22, 2, '1103'),
                (550, NULL, NULL, 24, 2, '544'),
                (551, NULL, NULL, 26, 2, '778'),
                (552, NULL, NULL, 27, 2, '234'),
                (553, NULL, NULL, 28, 2, '395'),
                (554, NULL, NULL, 30, 2, '784'),
                (555, NULL, NULL, 32, 2, '247'),
                (556, NULL, NULL, 33, 2, '959'),
                (557, NULL, NULL, 34, 2, '738'),
                (558, NULL, NULL, 36, 2, '559'),
                (559, NULL, NULL, 38, 2, '599'),
                (560, NULL, NULL, 39, 2, '383'),
                (561, NULL, NULL, 40, 2, '282'),
                (562, NULL, NULL, 42, 2, '309'),
                (563, NULL, NULL, 44, 2, '410'),
                (564, NULL, NULL, 45, 2, '190'),
                (565, NULL, NULL, 46, 2, '594'),
                (566, NULL, NULL, 48, 2, '228'),
                (567, NULL, NULL, 50, 2, '284'),
                (568, NULL, NULL, 51, 2, '758'),
                (569, NULL, NULL, 52, 2, '503'),
                (570, NULL, NULL, 54, 2, '672'),
                (571, NULL, NULL, 56, 2, '714'),
                (572, NULL, NULL, 57, 2, '896'),
                (573, NULL, NULL, 58, 2, '801'),
                (574, NULL, NULL, 60, 2, '1067'),
                (575, NULL, NULL, 62, 2, '1016'),
                (576, NULL, NULL, 63, 2, '918'),
                (577, NULL, NULL, 64, 2, '535'),
                (578, NULL, NULL, 66, 2, '970'),
                (579, NULL, NULL, 68, 2, '1004'),
                (580, NULL, NULL, 69, 2, '238'),
                (581, NULL, NULL, 70, 2, '296'),
                (582, NULL, NULL, 72, 2, '663'),
                (583, NULL, NULL, 74, 2, '1034'),
                (584, NULL, NULL, 75, 2, '318'),
                (585, NULL, NULL, 76, 2, '301'),
                (586, NULL, NULL, 78, 2, '779'),
                (587, NULL, NULL, 80, 2, '225'),
                (588, NULL, NULL, 81, 2, '839'),
                (589, NULL, NULL, 82, 2, '349'),
                (590, NULL, NULL, 84, 2, '567'),
                (591, NULL, NULL, 86, 2, '430'),
                (592, NULL, NULL, 87, 2, '626'),
                (593, NULL, NULL, 88, 2, '812'),
                (594, NULL, NULL, 90, 2, '960'),
                (595, NULL, NULL, 92, 2, '815'),
                (596, NULL, NULL, 93, 2, '1078'),
                (597, NULL, NULL, 94, 2, '605'),
                (598, NULL, NULL, 96, 2, '313'),
                (599, NULL, NULL, 98, 2, '716'),
                (600, NULL, NULL, 99, 2, '426'),
                (601, NULL, NULL, 100, 2, '577'),
                (602, NULL, NULL, 2, 3, '1.270018421'),
                (603, NULL, NULL, 4, 3, '3.025543904'),
                (604, NULL, NULL, 6, 3, '2.636676918'),
                (605, NULL, NULL, 8, 3, '3.346387614'),
                (606, NULL, NULL, 10, 3, '2.859468744'),
                (607, NULL, NULL, 12, 3, '1.074558188'),
                (608, NULL, NULL, 14, 3, '2.932338841'),
                (609, NULL, NULL, 16, 3, '2.087584363'),
                (610, NULL, NULL, 18, 3, '3.408517083'),
                (611, NULL, NULL, 20, 3, '0.8617591364'),
                (612, NULL, NULL, 22, 3, '1.541525117'),
                (613, NULL, NULL, 24, 3, '3.298127054'),
                (614, NULL, NULL, 26, 3, '1.226399995'),
                (615, NULL, NULL, 28, 3, '1.865379565'),
                (616, NULL, NULL, 30, 3, '3.17141275'),
                (617, NULL, NULL, 32, 3, '2.035047004'),
                (618, NULL, NULL, 34, 3, '2.099784624'),
                (619, NULL, NULL, 36, 3, '1.943599425'),
                (620, NULL, NULL, 38, 3, '0.7199486324'),
                (621, NULL, NULL, 40, 3, '2.553391324'),
                (622, NULL, NULL, 42, 3, '1.745140874'),
                (623, NULL, NULL, 44, 3, '2.523771201'),
                (624, NULL, NULL, 46, 3, '3.332058016'),
                (625, NULL, NULL, 48, 3, '1.814933014'),
                (626, NULL, NULL, 50, 3, '2.354128602'),
                (627, NULL, NULL, 52, 3, '1.294755944'),
                (628, NULL, NULL, 54, 3, '2.008035782'),
                (629, NULL, NULL, 56, 3, '1.991816459'),
                (630, NULL, NULL, 58, 3, '1.387187018'),
                (631, NULL, NULL, 60, 3, '3.412101376'),
                (632, NULL, NULL, 62, 3, '2.101437554'),
                (633, NULL, NULL, 64, 3, '1.697792144'),
                (634, NULL, NULL, 66, 3, '1.07272037'),
                (635, NULL, NULL, 68, 3, '1.896460345'),
                (636, NULL, NULL, 70, 3, '1.59923758'),
                (637, NULL, NULL, 72, 3, '2.247411824'),
                (638, NULL, NULL, 74, 3, '1.851653347'),
                (639, NULL, NULL, 76, 3, '2.290435341'),
                (640, NULL, NULL, 78, 3, '3.172783542'),
                (641, NULL, NULL, 80, 3, '1.530131423'),
                (642, NULL, NULL, 82, 3, '2.036501373'),
                (643, NULL, NULL, 84, 3, '0.6286500311'),
                (644, NULL, NULL, 86, 3, '0.9619032395'),
                (645, NULL, NULL, 88, 3, '2.706834686'),
                (646, NULL, NULL, 90, 3, '0.7409603498'),
                (647, NULL, NULL, 92, 3, '0.7226889175'),
                (648, NULL, NULL, 94, 3, '1.343687917'),
                (649, NULL, NULL, 96, 3, '2.435514536'),
                (650, NULL, NULL, 98, 3, '2.579194234'),
                (651, NULL, NULL, 100, 3, '2.509769933');

        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
