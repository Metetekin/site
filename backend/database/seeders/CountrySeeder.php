<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;
use DateTime;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void 
     */
    public function run()
    {
        Country::truncate();
        $countries = [
            
            ['name' => 'Afghanistan', 'short_code' => 'AF', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Åland Islands', 'short_code' => 'AX', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Albania', 'short_code' => 'AL', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Algeria', 'short_code' => 'DZ', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'American Samoa', 'short_code' => 'AS', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Andorra', 'short_code' => 'AD', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Angola', 'short_code' => 'AO', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Anguilla', 'short_code' => 'AI', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Antarctica', 'short_code' => 'AQ', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Antigua and Barbuda', 'short_code' => 'AG', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Argentina', 'short_code' => 'AR', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Armenia', 'short_code' => 'AM', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Aruba', 'short_code' => 'AW', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Australia', 'short_code' => 'AU', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Austria', 'short_code' => 'AT', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Azerbaijan', 'short_code' => 'AZ', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Bahamas', 'short_code' => 'BS', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Bahrain', 'short_code' => 'BH', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Bangladesh', 'short_code' => 'BD', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Barbados', 'short_code' => 'BB', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Belarus', 'short_code' => 'BY', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Belgium', 'short_code' => 'BE', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Belize', 'short_code' => 'BZ', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Benin', 'short_code' => 'BJ', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Bermuda', 'short_code' => 'BM', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Bhutan', 'short_code' => 'BT', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Bolivia, Plurinational State of', 'short_code' => 'BO', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Bonaire, Sint Eustatius and Saba', 'short_code' => 'BQ', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Bosnia and Herzegovina', 'short_code' => 'BA', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Botswana', 'short_code' => 'BW', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Bouvet Island', 'short_code' => 'BV', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Brazil', 'short_code' => 'BR', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'British Indian Ocean Territory', 'short_code' => 'IO', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Brunei Darussalam', 'short_code' => 'BN', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Bulgaria', 'short_code' => 'BG', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Burkina Faso', 'short_code' => 'BF', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Burundi', 'short_code' => 'BI', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Cambodia', 'short_code' => 'KH', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Cameroon', 'short_code' => 'CM', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Canada', 'short_code' => 'CA', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Cape Verde', 'short_code' => 'CV', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Cayman Islands', 'short_code' => 'KY', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Central African Republic', 'short_code' => 'CF', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Chad', 'short_code' => 'TD', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Chile', 'short_code' => 'CL', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'China', 'short_code' => 'CN', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Christmas Island', 'short_code' => 'CX', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Cocos (Keeling) Islands', 'short_code' => 'CC', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Colombia', 'short_code' => 'CO', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Comoros', 'short_code' => 'KM', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Congo', 'short_code' => 'CG', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Congo, the Democratic Republic of the', 'short_code' => 'CD', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Cook Islands', 'short_code' => 'CK', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Costa Rica', 'short_code' => 'CR', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Côte d\'Ivoire', 'short_code' => 'CI', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Croatia', 'short_code' => 'HR', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Cuba', 'short_code' => 'CU', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Curaçao', 'short_code' => 'CW', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Cyprus', 'short_code' => 'CY', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Czech Republic', 'short_code' => 'CZ', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Denmark', 'short_code' => 'DK', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Djibouti', 'short_code' => 'DJ', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Dominica', 'short_code' => 'DM', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Dominican Republic', 'short_code' => 'DO', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Ecuador', 'short_code' => 'EC', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Egypt', 'short_code' => 'EG', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'El Salvador', 'short_code' => 'SV', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Equatorial Guinea', 'short_code' => 'GQ', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Eritrea', 'short_code' => 'ER', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Estonia', 'short_code' => 'EE', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Ethiopia', 'short_code' => 'ET', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Falkland Islands (Malvinas)', 'short_code' => 'FK', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Faroe Islands', 'short_code' => 'FO', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Fiji', 'short_code' => 'FJ', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Finland', 'short_code' => 'FI', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'France', 'short_code' => 'FR', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'French Guiana', 'short_code' => 'GF', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'French Polynesia', 'short_code' => 'PF', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'French Southern Territories', 'short_code' => 'TF', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Gabon', 'short_code' => 'GA', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Gambia', 'short_code' => 'GM', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Georgia', 'short_code' => 'GE', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Germany', 'short_code' => 'DE', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Ghana', 'short_code' => 'GH', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Gibraltar', 'short_code' => 'GI', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Greece', 'short_code' => 'GR', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Greenland', 'short_code' => 'GL', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Grenada', 'short_code' => 'GD', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Guadeloupe', 'short_code' => 'GP', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Guam', 'short_code' => 'GU', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Guatemala', 'short_code' => 'GT', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Guernsey', 'short_code' => 'GG', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Guinea', 'short_code' => 'GN', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Guinea-Bissau', 'short_code' => 'GW', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Guyana', 'short_code' => 'GY', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Haiti', 'short_code' => 'HT', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Heard Island and McDonald Mcdonald Islands', 'short_code' => 'HM', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Holy See (Vatican City State)', 'short_code' => 'VA', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Honduras', 'short_code' => 'HN', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Hong Kong', 'short_code' => 'HK', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Hungary', 'short_code' => 'HU', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Iceland', 'short_code' => 'IS', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'India', 'short_code' => 'IN', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Indonesia', 'short_code' => 'ID', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Iran, Islamic Republic of', 'short_code' => 'IR', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Iraq', 'short_code' => 'IQ', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Ireland', 'short_code' => 'IE', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Isle of Man', 'short_code' => 'IM', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Israel', 'short_code' => 'IL', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Italy', 'short_code' => 'IT', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Jamaica', 'short_code' => 'JM', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Japan', 'short_code' => 'JP', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Jersey', 'short_code' => 'JE', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Jordan', 'short_code' => 'JO', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Kazakhstan', 'short_code' => 'KZ', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Kenya', 'short_code' => 'KE', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Kiribati', 'short_code' => 'KI', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Korea, Democratic People\'s Republic of', 'short_code' => 'KP', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Korea, Republic of', 'short_code' => 'KR', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Kuwait', 'short_code' => 'KW', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Kyrgyzstan', 'short_code' => 'KG', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Lao People\'s Democratic Republic', 'short_code' => 'LA', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Latvia', 'short_code' => 'LV', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Lebanon', 'short_code' => 'LB', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Lesotho', 'short_code' => 'LS', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Liberia', 'short_code' => 'LR', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Libya', 'short_code' => 'LY', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Liechtenstein', 'short_code' => 'LI', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Lithuania', 'short_code' => 'LT', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Luxembourg', 'short_code' => 'LU', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Macao', 'short_code' => 'MO', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Macedonia, the Former Yugoslav Republic of', 'short_code' => 'MK', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Madagascar', 'short_code' => 'MG', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Malawi', 'short_code' => 'MW', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Malaysia', 'short_code' => 'MY', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Maldives', 'short_code' => 'MV', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Mali', 'short_code' => 'ML', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Malta', 'short_code' => 'MT', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Marshall Islands', 'short_code' => 'MH', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Martinique', 'short_code' => 'MQ', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Mauritania', 'short_code' => 'MR', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Mauritius', 'short_code' => 'MU', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Mayotte', 'short_code' => 'YT', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Mexico', 'short_code' => 'MX', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Micronesia, Federated States of', 'short_code' => 'FM', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Moldova, Republic of', 'short_code' => 'MD', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Monaco', 'short_code' => 'MC', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Mongolia', 'short_code' => 'MN', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Montenegro', 'short_code' => 'ME', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Montserrat', 'short_code' => 'MS', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Morocco', 'short_code' => 'MA', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Mozambique', 'short_code' => 'MZ', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Myanmar', 'short_code' => 'MM', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Namibia', 'short_code' => 'NA', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Nauru', 'short_code' => 'NR', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Nepal', 'short_code' => 'NP', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Netherlands', 'short_code' => 'NL', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'New Caledonia', 'short_code' => 'NC', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'New Zealand', 'short_code' => 'NZ', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Nicaragua', 'short_code' => 'NI', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Niger', 'short_code' => 'NE', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Nigeria', 'short_code' => 'NG', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Niue', 'short_code' => 'NU', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Norfolk Island', 'short_code' => 'NF', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Northern Mariana Islands', 'short_code' => 'MP', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Norway', 'short_code' => 'NO', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Oman', 'short_code' => 'OM', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Pakistan', 'short_code' => 'PK', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Palau', 'short_code' => 'PW', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Palestine, State of', 'short_code' => 'PS', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Panama', 'short_code' => 'PA', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Papua New Guinea', 'short_code' => 'PG', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Paraguay', 'short_code' => 'PY', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Peru', 'short_code' => 'PE', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Philippines', 'short_code' => 'PH', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Pitcairn', 'short_code' => 'PN', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Poland', 'short_code' => 'PL', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Portugal', 'short_code' => 'PT', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Puerto Rico', 'short_code' => 'PR', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Qatar', 'short_code' => 'QA', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Réunion', 'short_code' => 'RE', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Romania', 'short_code' => 'RO', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Russian Federation', 'short_code' => 'RU', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Rwanda', 'short_code' => 'RW', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Saint Barthélemy', 'short_code' => 'BL', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Saint Helena, Ascension and Tristan da Cunha', 'short_code' => 'SH', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Saint Kitts and Nevis', 'short_code' => 'KN', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Saint Lucia', 'short_code' => 'LC', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Saint Martin (French part)', 'short_code' => 'MF', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Saint Pierre and Miquelon', 'short_code' => 'PM', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Saint Vincent and the Grenadines', 'short_code' => 'VC', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Samoa', 'short_code' => 'WS', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'San Marino', 'short_code' => 'SM', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Sao Tome and Principe', 'short_code' => 'ST', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Saudi Arabia', 'short_code' => 'SA', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Senegal', 'short_code' => 'SN', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Serbia', 'short_code' => 'RS', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Seychelles', 'short_code' => 'SC', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Sierra Leone', 'short_code' => 'SL', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Singapore', 'short_code' => 'SG', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Sint Maarten (Dutch part)', 'short_code' => 'SX', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Slovakia', 'short_code' => 'SK', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Slovenia', 'short_code' => 'SI', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Solomon Islands', 'short_code' => 'SB', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Somalia', 'short_code' => 'SO', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'South Africa', 'short_code' => 'ZA', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'South Georgia and the South Sandwich Islands', 'short_code' => 'GS', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'South Sudan', 'short_code' => 'SS', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Spain', 'short_code' => 'ES', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Sri Lanka', 'short_code' => 'LK', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Sudan', 'short_code' => 'SD', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Suriname', 'short_code' => 'SR', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Svalbard and Jan Mayen', 'short_code' => 'SJ', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Swaziland', 'short_code' => 'SZ', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Sweden', 'short_code' => 'SE', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Switzerland', 'short_code' => 'CH', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Syrian Arab Republic', 'short_code' => 'SY', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Taiwan', 'short_code' => 'TW', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Tajikistan', 'short_code' => 'TJ', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Tanzania, United Republic of', 'short_code' => 'TZ', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Thailand', 'short_code' => 'TH', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Timor-Leste', 'short_code' => 'TL', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Togo', 'short_code' => 'TG', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Tokelau', 'short_code' => 'TK', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Tonga', 'short_code' => 'TO', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Trinidad and Tobago', 'short_code' => 'TT', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Tunisia', 'short_code' => 'TN', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Turkey', 'short_code' => 'TR', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Turkmenistan', 'short_code' => 'TM', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Turks and Caicos Islands', 'short_code' => 'TC', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Tuvalu', 'short_code' => 'TV', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Uganda', 'short_code' => 'UG', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Ukraine', 'short_code' => 'UA', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'United Arab Emirates', 'short_code' => 'AE', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'United Kingdom', 'short_code' => 'GB', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'United States', 'short_code' => 'US', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'United States Minor Outlying Islands', 'short_code' => 'UM', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Uruguay', 'short_code' => 'UY', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Uzbekistan', 'short_code' => 'UZ', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Vanuatu', 'short_code' => 'VU', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Venezuela, Bolivarian Republic of', 'short_code' => 'VE', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Viet Nam', 'short_code' => 'VN', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Virgin Islands, British', 'short_code' => 'VG', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Virgin Islands, U.S.', 'short_code' => 'VI', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Wallis and Futuna', 'short_code' => 'WF', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Western Sahara', 'short_code' => 'EH', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Yemen', 'short_code' => 'YE', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Zambia', 'short_code' => 'ZM', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
            ['name' => 'Zimbabwe', 'short_code' => 'ZW', 'status' => 'active', 'created_at' => new DateTime(),'updated_at' => new DateTime() ],
        ];
        Country::insert($countries);
    }
}
