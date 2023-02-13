<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    public function run()
    {
        $countries = [
            [
                'id'         => 1,
                'name'       => 'Afghanistan',
                'short_code' => 'AF',
            ],
            [
                'id'         => 2,
                'name'       => 'Albania',
                'short_code' => 'AL',
            ],
            [
                'id'         => 3,
                'name'       => 'Algeria',
                'short_code' => 'DZ',
            ],
            [
                'id'         => 4,
                'name'       => 'American Samoa',
                'short_code' => 'AS',
            ],
            [
                'id'         => 5,
                'name'       => 'Andorra',
                'short_code' => 'AD',
            ],
            [
                'id'         => 6,
                'name'       => 'Angola',
                'short_code' => 'AO',
            ],
            [
                'id'         => 7,
                'name'       => 'Anguilla',
                'short_code' => 'AI',
            ],
            [
                'id'         => 8,
                'name'       => 'Antarctica',
                'short_code' => 'AQ',
            ],
            [
                'id'         => 9,
                'name'       => 'Antigua and Barbuda',
                'short_code' => 'AG',
            ],
            [
                'id'         => 10,
                'name'       => 'Argentina',
                'short_code' => 'AR',
            ],
            [
                'id'         => 11,
                'name'       => 'Armenia',
                'short_code' => 'AM',
            ],
            [
                'id'         => 12,
                'name'       => 'Aruba',
                'short_code' => 'AW',
            ],
            [
                'id'         => 13,
                'name'       => 'Australia',
                'short_code' => 'AU',
            ],
            [
                'id'         => 14,
                'name'       => 'Austria',
                'short_code' => 'AT',
            ],
            [
                'id'         => 15,
                'name'       => 'Azerbaijan',
                'short_code' => 'AZ',
            ],
            [
                'id'         => 16,
                'name'       => 'Bahamas',
                'short_code' => 'BS',
            ],
            [
                'id'         => 17,
                'name'       => 'Bahrain',
                'short_code' => 'BH',
            ],
            [
                'id'         => 18,
                'name'       => 'Bangladesh',
                'short_code' => 'BD',
            ],
            [
                'id'         => 19,
                'name'       => 'Barbados',
                'short_code' => 'BB',
            ],
            [
                'id'         => 20,
                'name'       => 'Belarus',
                'short_code' => 'BY',
            ],
            [
                'id'         => 21,
                'name'       => 'Belgium',
                'short_code' => 'BE',
            ],
            [
                'id'         => 22,
                'name'       => 'Belize',
                'short_code' => 'BZ',
            ],
            [
                'id'         => 23,
                'name'       => 'Benin',
                'short_code' => 'BJ',
            ],
            [
                'id'         => 24,
                'name'       => 'Bermuda',
                'short_code' => 'BM',
            ],
            [
                'id'         => 25,
                'name'       => 'Bhutan',
                'short_code' => 'BT',
            ],
            [
                'id'         => 26,
                'name'       => 'Bolivia',
                'short_code' => 'BO',
            ],
            [
                'id'         => 27,
                'name'       => 'Bosnia and Herzegovina',
                'short_code' => 'BA',
            ],
            [
                'id'         => 28,
                'name'       => 'Botswana',
                'short_code' => 'BW',
            ],
            [
                'id'         => 29,
                'name'       => 'Brazil',
                'short_code' => 'BR',
            ],
            [
                'id'         => 30,
                'name'       => 'British Indian Ocean Territory',
                'short_code' => 'IO',
            ],
            [
                'id'         => 31,
                'name'       => 'British Virgin Islands',
                'short_code' => 'VG',
            ],
            [
                'id'         => 32,
                'name'       => 'Brunei',
                'short_code' => 'BN',
            ],
            [
                'id'         => 33,
                'name'       => 'Bulgaria',
                'short_code' => 'BG',
            ],
            [
                'id'         => 34,
                'name'       => 'Burkina Faso',
                'short_code' => 'BF',
            ],
            [
                'id'         => 35,
                'name'       => 'Burundi',
                'short_code' => 'BI',
            ],
            [
                'id'         => 36,
                'name'       => 'Cambodia',
                'short_code' => 'KH',
            ],
            [
                'id'         => 37,
                'name'       => 'Cameroon',
                'short_code' => 'CM',
            ],
            [
                'id'         => 38,
                'name'       => 'Canada',
                'short_code' => 'CA',
            ],
            [
                'id'         => 39,
                'name'       => 'Cape Verde',
                'short_code' => 'CV',
            ],
            [
                'id'         => 40,
                'name'       => 'Cayman Islands',
                'short_code' => 'KY',
            ],
            [
                'id'         => 41,
                'name'       => 'Central African Republic',
                'short_code' => 'CF',
            ],
            [
                'id'         => 42,
                'name'       => 'Chad',
                'short_code' => 'TD',
            ],
            [
                'id'         => 43,
                'name'       => 'Chile',
                'short_code' => 'CL',
            ],
            [
                'id'         => 44,
                'name'       => 'China',
                'short_code' => 'CN',
            ],
            [
                'id'         => 45,
                'name'       => 'Christmas Island',
                'short_code' => 'CX',
            ],
            [
                'id'         => 46,
                'name'       => 'Cocos Islands',
                'short_code' => 'CC',
            ],
            [
                'id'         => 47,
                'name'       => 'Colombia',
                'short_code' => 'CO',
            ],
            [
                'id'         => 48,
                'name'       => 'Comoros',
                'short_code' => 'KM',
            ],
            [
                'id'         => 49,
                'name'       => 'Cook Islands',
                'short_code' => 'CK',
            ],
            [
                'id'         => 50,
                'name'       => 'Costa Rica',
                'short_code' => 'CR',
            ],
            [
                'id'         => 51,
                'name'       => 'Croatia',
                'short_code' => 'HR',
            ],
            [
                'id'         => 52,
                'name'       => 'Cuba',
                'short_code' => 'CU',
            ],
            [
                'id'         => 53,
                'name'       => 'Curacao',
                'short_code' => 'CW',
            ],
            [
                'id'         => 54,
                'name'       => 'Cyprus',
                'short_code' => 'CY',
            ],
            [
                'id'         => 55,
                'name'       => 'Czech Republic',
                'short_code' => 'CZ',
            ],
            [
                'id'         => 56,
                'name'       => 'Democratic Republic of the Congo',
                'short_code' => 'CD',
            ],
            [
                'id'         => 57,
                'name'       => 'Denmark',
                'short_code' => 'DK',
            ],
            [
                'id'         => 58,
                'name'       => 'Djibouti',
                'short_code' => 'DJ',
            ],
            [
                'id'         => 59,
                'name'       => 'Dominica',
                'short_code' => 'DM',
            ],
            [
                'id'         => 60,
                'name'       => 'Dominican Republic',
                'short_code' => 'DO',
            ],
            [
                'id'         => 61,
                'name'       => 'East Timor',
                'short_code' => 'TL',
            ],
            [
                'id'         => 62,
                'name'       => 'Ecuador',
                'short_code' => 'EC',
            ],
            [
                'id'         => 63,
                'name'       => 'Egypt',
                'short_code' => 'EG',
            ],
            [
                'id'         => 64,
                'name'       => 'El Salvador',
                'short_code' => 'SV',
            ],
            [
                'id'         => 65,
                'name'       => 'Equatorial Guinea',
                'short_code' => 'GQ',
            ],
            [
                'id'         => 66,
                'name'       => 'Eritrea',
                'short_code' => 'ER',
            ],
            [
                'id'         => 67,
                'name'       => 'Estonia',
                'short_code' => 'EE',
            ],
            [
                'id'         => 68,
                'name'       => 'Ethiopia',
                'short_code' => 'ET',
            ],
            [
                'id'         => 69,
                'name'       => 'Falkland Islands',
                'short_code' => 'FK',
            ],
            [
                'id'         => 70,
                'name'       => 'Faroe Islands',
                'short_code' => 'FO',
            ],
            [
                'id'         => 71,
                'name'       => 'Fiji',
                'short_code' => 'FJ',
            ],
            [
                'id'         => 72,
                'name'       => 'Finland',
                'short_code' => 'FI',
            ],
            [
                'id'         => 73,
                'name'       => 'France',
                'short_code' => 'FR',
            ],
            [
                'id'         => 74,
                'name'       => 'French Polynesia',
                'short_code' => 'PF',
            ],
            [
                'id'         => 75,
                'name'       => 'Gabon',
                'short_code' => 'GA',
            ],
            [
                'id'         => 76,
                'name'       => 'Gambia',
                'short_code' => 'GM',
            ],
            [
                'id'         => 77,
                'name'       => 'Georgia',
                'short_code' => 'GE',
            ],
            [
                'id'         => 78,
                'name'       => 'Germany',
                'short_code' => 'DE',
            ],
            [
                'id'         => 79,
                'name'       => 'Ghana',
                'short_code' => 'GH',
            ],
            [
                'id'         => 80,
                'name'       => 'Gibraltar',
                'short_code' => 'GI',
            ],
            [
                'id'         => 81,
                'name'       => 'Greece',
                'short_code' => 'GR',
            ],
            [
                'id'         => 82,
                'name'       => 'Greenland',
                'short_code' => 'GL',
            ],
            [
                'id'         => 83,
                'name'       => 'Grenada',
                'short_code' => 'GD',
            ],
            [
                'id'         => 84,
                'name'       => 'Guam',
                'short_code' => 'GU',
            ],
            [
                'id'         => 85,
                'name'       => 'Guatemala',
                'short_code' => 'GT',
            ],
            [
                'id'         => 86,
                'name'       => 'Guernsey',
                'short_code' => 'GG',
            ],
            [
                'id'         => 87,
                'name'       => 'Guinea',
                'short_code' => 'GN',
            ],
            [
                'id'         => 88,
                'name'       => 'Guinea-Bissau',
                'short_code' => 'GW',
            ],
            [
                'id'         => 89,
                'name'       => 'Guyana',
                'short_code' => 'GY',
            ],
            [
                'id'         => 90,
                'name'       => 'Haiti',
                'short_code' => 'HT',
            ],
            [
                'id'         => 91,
                'name'       => 'Honduras',
                'short_code' => 'HN',
            ],
            [
                'id'         => 92,
                'name'       => 'Hong Kong',
                'short_code' => 'HK',
            ],
            [
                'id'         => 93,
                'name'       => 'Hungary',
                'short_code' => 'HU',
            ],
            [
                'id'         => 94,
                'name'       => 'Iceland',
                'short_code' => 'IS',
            ],
            [
                'id'         => 95,
                'name'       => 'India',
                'short_code' => 'IN',
            ],
            [
                'id'         => 96,
                'name'       => 'Indonesia',
                'short_code' => 'ID',
            ],
            [
                'id'         => 97,
                'name'       => 'Iran',
                'short_code' => 'IR',
            ],
            [
                'id'         => 98,
                'name'       => 'Iraq',
                'short_code' => 'IQ',
            ],
            [
                'id'         => 99,
                'name'       => 'Ireland',
                'short_code' => 'IE',
            ],
            [
                'id'         => 100,
                'name'       => 'Isle of Man',
                'short_code' => 'IM',
            ],
            [
                'id'         => 101,
                'name'       => 'Israel',
                'short_code' => 'IL',
            ],
            [
                'id'         => 102,
                'name'       => 'Italy',
                'short_code' => 'IT',
            ],
            [
                'id'         => 103,
                'name'       => 'Ivory Coast',
                'short_code' => 'CI',
            ],
            [
                'id'         => 104,
                'name'       => 'Jamaica',
                'short_code' => 'JM',
            ],
            [
                'id'         => 105,
                'name'       => 'Japan',
                'short_code' => 'JP',
            ],
            [
                'id'         => 106,
                'name'       => 'Jersey',
                'short_code' => 'JE',
            ],
            [
                'id'         => 107,
                'name'       => 'Jordan',
                'short_code' => 'JO',
            ],
            [
                'id'         => 108,
                'name'       => 'Kazakhstan',
                'short_code' => 'KZ',
            ],
            [
                'id'         => 109,
                'name'       => 'Kenya',
                'short_code' => 'KE',
            ],
            [
                'id'         => 110,
                'name'       => 'Kiribati',
                'short_code' => 'KI',
            ],
            [
                'id'         => 111,
                'name'       => 'Kosovo',
                'short_code' => 'XK',
            ],
            [
                'id'         => 112,
                'name'       => 'Kuwait',
                'short_code' => 'KW',
            ],
            [
                'id'         => 113,
                'name'       => 'Kyrgyzstan',
                'short_code' => 'KG',
            ],
            [
                'id'         => 114,
                'name'       => 'Laos',
                'short_code' => 'LA',
            ],
            [
                'id'         => 115,
                'name'       => 'Latvia',
                'short_code' => 'LV',
            ],
            [
                'id'         => 116,
                'name'       => 'Lebanon',
                'short_code' => 'LB',
            ],
            [
                'id'         => 117,
                'name'       => 'Lesotho',
                'short_code' => 'LS',
            ],
            [
                'id'         => 118,
                'name'       => 'Liberia',
                'short_code' => 'LR',
            ],
            [
                'id'         => 119,
                'name'       => 'Libya',
                'short_code' => 'LY',
            ],
            [
                'id'         => 120,
                'name'       => 'Liechtenstein',
                'short_code' => 'LI',
            ],
            [
                'id'         => 121,
                'name'       => 'Lithuania',
                'short_code' => 'LT',
            ],
            [
                'id'         => 122,
                'name'       => 'Luxembourg',
                'short_code' => 'LU',
            ],
            [
                'id'         => 123,
                'name'       => 'Macau',
                'short_code' => 'MO',
            ],
            [
                'id'         => 124,
                'name'       => 'Macedonia',
                'short_code' => 'MK',
            ],
            [
                'id'         => 125,
                'name'       => 'Madagascar',
                'short_code' => 'MG',
            ],
            [
                'id'         => 126,
                'name'       => 'Malawi',
                'short_code' => 'MW',
            ],
            [
                'id'         => 127,
                'name'       => 'Malaysia',
                'short_code' => 'MY',
            ],
            [
                'id'         => 128,
                'name'       => 'Maldives',
                'short_code' => 'MV',
            ],
            [
                'id'         => 129,
                'name'       => 'Mali',
                'short_code' => 'ML',
            ],
            [
                'id'         => 130,
                'name'       => 'Malta',
                'short_code' => 'MT',
            ],
            [
                'id'         => 131,
                'name'       => 'Marshall Islands',
                'short_code' => 'MH',
            ],
            [
                'id'         => 132,
                'name'       => 'Mauritania',
                'short_code' => 'MR',
            ],
            [
                'id'         => 133,
                'name'       => 'Mauritius',
                'short_code' => 'MU',
            ],
            [
                'id'         => 134,
                'name'       => 'Mayotte',
                'short_code' => 'YT',
            ],
            [
                'id'         => 135,
                'name'       => 'Mexico',
                'short_code' => 'MX',
            ],
            [
                'id'         => 136,
                'name'       => 'Micronesia',
                'short_code' => 'FM',
            ],
            [
                'id'         => 137,
                'name'       => 'Moldova',
                'short_code' => 'MD',
            ],
            [
                'id'         => 138,
                'name'       => 'Monaco',
                'short_code' => 'MC',
            ],
            [
                'id'         => 139,
                'name'       => 'Mongolia',
                'short_code' => 'MN',
            ],
            [
                'id'         => 140,
                'name'       => 'Montenegro',
                'short_code' => 'ME',
            ],
            [
                'id'         => 141,
                'name'       => 'Montserrat',
                'short_code' => 'MS',
            ],
            [
                'id'         => 142,
                'name'       => 'Morocco',
                'short_code' => 'MA',
            ],
            [
                'id'         => 143,
                'name'       => 'Mozambique',
                'short_code' => 'MZ',
            ],
            [
                'id'         => 144,
                'name'       => 'Myanmar',
                'short_code' => 'MM',
            ],
            [
                'id'         => 145,
                'name'       => 'Namibia',
                'short_code' => 'NA',
            ],
            [
                'id'         => 146,
                'name'       => 'Nauru',
                'short_code' => 'NR',
            ],
            [
                'id'         => 147,
                'name'       => 'Nepal',
                'short_code' => 'NP',
            ],
            [
                'id'         => 148,
                'name'       => 'Netherlands',
                'short_code' => 'NL',
            ],
            [
                'id'         => 149,
                'name'       => 'Netherlands Antilles',
                'short_code' => 'AN',
            ],
            [
                'id'         => 150,
                'name'       => 'New Caledonia',
                'short_code' => 'NC',
            ],
            [
                'id'         => 151,
                'name'       => 'New Zealand',
                'short_code' => 'NZ',
            ],
            [
                'id'         => 152,
                'name'       => 'Nicaragua',
                'short_code' => 'NI',
            ],
            [
                'id'         => 153,
                'name'       => 'Niger',
                'short_code' => 'NE',
            ],
            [
                'id'         => 154,
                'name'       => 'Nigeria',
                'short_code' => 'NG',
            ],
            [
                'id'         => 155,
                'name'       => 'Niue',
                'short_code' => 'NU',
            ],
            [
                'id'         => 156,
                'name'       => 'North Korea',
                'short_code' => 'KP',
            ],
            [
                'id'         => 157,
                'name'       => 'Northern Mariana Islands',
                'short_code' => 'MP',
            ],
            [
                'id'         => 158,
                'name'       => 'Norway',
                'short_code' => 'NO',
            ],
            [
                'id'         => 159,
                'name'       => 'Oman',
                'short_code' => 'OM',
            ],
            [
                'id'         => 160,
                'name'       => 'Pakistan',
                'short_code' => 'PK',
            ],
            [
                'id'         => 161,
                'name'       => 'Palau',
                'short_code' => 'PW',
            ],
            [
                'id'         => 162,
                'name'       => 'Palestine',
                'short_code' => 'PS',
            ],
            [
                'id'         => 163,
                'name'       => 'Panama',
                'short_code' => 'PA',
            ],
            [
                'id'         => 164,
                'name'       => 'Papua New Guinea',
                'short_code' => 'PG',
            ],
            [
                'id'         => 165,
                'name'       => 'Paraguay',
                'short_code' => 'PY',
            ],
            [
                'id'         => 166,
                'name'       => 'Peru',
                'short_code' => 'PE',
            ],
            [
                'id'         => 167,
                'name'       => 'Philippines',
                'short_code' => 'PH',
            ],
            [
                'id'         => 168,
                'name'       => 'Pitcairn',
                'short_code' => 'PN',
            ],
            [
                'id'         => 169,
                'name'       => 'Poland',
                'short_code' => 'PL',
            ],
            [
                'id'         => 170,
                'name'       => 'Portugal',
                'short_code' => 'PT',
            ],
            [
                'id'         => 171,
                'name'       => 'Puerto Rico',
                'short_code' => 'PR',
            ],
            [
                'id'         => 172,
                'name'       => 'Qatar',
                'short_code' => 'QA',
            ],
            [
                'id'         => 173,
                'name'       => 'Republic of the Congo',
                'short_code' => 'CG',
            ],
            [
                'id'         => 174,
                'name'       => 'Reunion',
                'short_code' => 'RE',
            ],
            [
                'id'         => 175,
                'name'       => 'Romania',
                'short_code' => 'RO',
            ],
            [
                'id'         => 176,
                'name'       => 'Russia',
                'short_code' => 'RU',
            ],
            [
                'id'         => 177,
                'name'       => 'Rwanda',
                'short_code' => 'RW',
            ],
            [
                'id'         => 178,
                'name'       => 'Saint Barthelemy',
                'short_code' => 'BL',
            ],
            [
                'id'         => 179,
                'name'       => 'Saint Helena',
                'short_code' => 'SH',
            ],
            [
                'id'         => 180,
                'name'       => 'Saint Kitts and Nevis',
                'short_code' => 'KN',
            ],
            [
                'id'         => 181,
                'name'       => 'Saint Lucia',
                'short_code' => 'LC',
            ],
            [
                'id'         => 182,
                'name'       => 'Saint Martin',
                'short_code' => 'MF',
            ],
            [
                'id'         => 183,
                'name'       => 'Saint Pierre and Miquelon',
                'short_code' => 'PM',
            ],
            [
                'id'         => 184,
                'name'       => 'Saint Vincent and the Grenadines',
                'short_code' => 'VC',
            ],
            [
                'id'         => 185,
                'name'       => 'Samoa',
                'short_code' => 'WS',
            ],
            [
                'id'         => 186,
                'name'       => 'San Marino',
                'short_code' => 'SM',
            ],
            [
                'id'         => 187,
                'name'       => 'Sao Tome and Principe',
                'short_code' => 'ST',
            ],
            [
                'id'         => 188,
                'name'       => 'Saudi Arabia',
                'short_code' => 'SA',
            ],
            [
                'id'         => 189,
                'name'       => 'Senegal',
                'short_code' => 'SN',
            ],
            [
                'id'         => 190,
                'name'       => 'Serbia',
                'short_code' => 'RS',
            ],
            [
                'id'         => 191,
                'name'       => 'Seychelles',
                'short_code' => 'SC',
            ],
            [
                'id'         => 192,
                'name'       => 'Sierra Leone',
                'short_code' => 'SL',
            ],
            [
                'id'         => 193,
                'name'       => 'Singapore',
                'short_code' => 'SG',
            ],
            [
                'id'         => 194,
                'name'       => 'Sint Maarten',
                'short_code' => 'SX',
            ],
            [
                'id'         => 195,
                'name'       => 'Slovakia',
                'short_code' => 'SK',
            ],
            [
                'id'         => 196,
                'name'       => 'Slovenia',
                'short_code' => 'SI',
            ],
            [
                'id'         => 197,
                'name'       => 'Solomon Islands',
                'short_code' => 'SB',
            ],
            [
                'id'         => 198,
                'name'       => 'Somalia',
                'short_code' => 'SO',
            ],
            [
                'id'         => 199,
                'name'       => 'South Africa',
                'short_code' => 'ZA',
            ],
            [
                'id'         => 200,
                'name'       => 'South Korea',
                'short_code' => 'KR',
            ],
            [
                'id'         => 201,
                'name'       => 'South Sudan',
                'short_code' => 'SS',
            ],
            [
                'id'         => 202,
                'name'       => 'Spain',
                'short_code' => 'ES',
            ],
            [
                'id'         => 203,
                'name'       => 'Sri Lanka',
                'short_code' => 'LK',
            ],
            [
                'id'         => 204,
                'name'       => 'Sudan',
                'short_code' => 'SD',
            ],
            [
                'id'         => 205,
                'name'       => 'Suriname',
                'short_code' => 'SR',
            ],
            [
                'id'         => 206,
                'name'       => 'Svalbard and Jan Mayen',
                'short_code' => 'SJ',
            ],
            [
                'id'         => 207,
                'name'       => 'Swaziland',
                'short_code' => 'SZ',
            ],
            [
                'id'         => 208,
                'name'       => 'Sweden',
                'short_code' => 'SE',
            ],
            [
                'id'         => 209,
                'name'       => 'Switzerland',
                'short_code' => 'CH',
            ],
            [
                'id'         => 210,
                'name'       => 'Syria',
                'short_code' => 'SY',
            ],
            [
                'id'         => 211,
                'name'       => 'Taiwan',
                'short_code' => 'TW',
            ],
            [
                'id'         => 212,
                'name'       => 'Tajikistan',
                'short_code' => 'TJ',
            ],
            [
                'id'         => 213,
                'name'       => 'Tanzania',
                'short_code' => 'TZ',
            ],
            [
                'id'         => 214,
                'name'       => 'Thailand',
                'short_code' => 'TH',
            ],
            [
                'id'         => 215,
                'name'       => 'Togo',
                'short_code' => 'TG',
            ],
            [
                'id'         => 216,
                'name'       => 'Tokelau',
                'short_code' => 'TK',
            ],
            [
                'id'         => 217,
                'name'       => 'Tonga',
                'short_code' => 'TO',
            ],
            [
                'id'         => 218,
                'name'       => 'Trinidad and Tobago',
                'short_code' => 'TT',
            ],
            [
                'id'         => 219,
                'name'       => 'Tunisia',
                'short_code' => 'TN',
            ],
            [
                'id'         => 220,
                'name'       => 'Turkey',
                'short_code' => 'TR',
            ],
            [
                'id'         => 221,
                'name'       => 'Turkmenistan',
                'short_code' => 'TM',
            ],
            [
                'id'         => 222,
                'name'       => 'Turks and Caicos Islands',
                'short_code' => 'TC',
            ],
            [
                'id'         => 223,
                'name'       => 'Tuvalu',
                'short_code' => 'TV',
            ],
            [
                'id'         => 224,
                'name'       => 'U.S. Virgin Islands',
                'short_code' => 'VI',
            ],
            [
                'id'         => 225,
                'name'       => 'Uganda',
                'short_code' => 'UG',
            ],
            [
                'id'         => 226,
                'name'       => 'Ukraine',
                'short_code' => 'UA',
            ],
            [
                'id'         => 227,
                'name'       => 'United Arab Emirates',
                'short_code' => 'AE',
            ],
            [
                'id'         => 228,
                'name'       => 'United Kingdom',
                'short_code' => 'GB',
            ],
            [
                'id'         => 229,
                'name'       => 'United States',
                'short_code' => 'US',
            ],
            [
                'id'         => 230,
                'name'       => 'Uruguay',
                'short_code' => 'UY',
            ],
            [
                'id'         => 231,
                'name'       => 'Uzbekistan',
                'short_code' => 'UZ',
            ],
            [
                'id'         => 232,
                'name'       => 'Vanuatu',
                'short_code' => 'VU',
            ],
            [
                'id'         => 233,
                'name'       => 'Vatican',
                'short_code' => 'VA',
            ],
            [
                'id'         => 234,
                'name'       => 'Venezuela',
                'short_code' => 'VE',
            ],
            [
                'id'         => 235,
                'name'       => 'Vietnam',
                'short_code' => 'VN',
            ],
            [
                'id'         => 236,
                'name'       => 'Wallis and Futuna',
                'short_code' => 'WF',
            ],
            [
                'id'         => 237,
                'name'       => 'Western Sahara',
                'short_code' => 'EH',
            ],
            [
                'id'         => 238,
                'name'       => 'Yemen',
                'short_code' => 'YE',
            ],
            [
                'id'         => 239,
                'name'       => 'Zambia',
                'short_code' => 'ZM',
            ],
            [
                'id'         => 240,
                'name'       => 'Zimbabwe',
                'short_code' => 'ZW',
            ],
        ];

        Country::insert($countries);
    }
}