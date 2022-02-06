<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="font-body bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500 text-white">

<div class="mb-25">
    <div class="w-full">
        <div class="m-auto w-max">
            <div class="flex items-center h-20">
                <div class="text-white text-5xl font-semibold">
                    CVmaker
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container overscroll-auto w-full relative" id="databinding">
    <form id="form" method="post">

        <div class="flex flex-row">

            <div class="w-1/2">
                <h5 class="text-3xl font-medium pl-10 pt-10 pb-6">Контактные данные</h5>

                <div class="flex flex-col space-y-6">

                    <div class="flex flex-row content-center items-center">
                        <h5 class="text-lg pl-10 w-3/12">Добавление фотографии</h5>
                        <input v-model="input_image" class="w-3/12 px-3 py-3 rounded-lg text-black" placeholder="Ссылка на фото" type="text">
                    </div>

                    <app-inp v-model="firstname" :placehold="'Имя'" :title="'Имя'"></app-inp>
                    <app-inp v-model="surname" :placehold="'Фамилия'" :title="'Фамилия'"></app-inp>

                    <div class="flex flex-row content-center items-center">
                        <h5 class="text-lg pl-10 w-3/12">Мобильный телефон</h5>
                        <input @input="change($event)" v-model="mob_phone" class="w-3/12 px-3 py-3 rounded-lg text-black" placeholder="Моб. телефон" type="text"
                               @change="change($event)">
                        <div class="error ml-5 font-bold text-xl text-gray-900" v-if="!isValid">Number is Invalid</div>
                    </div>

                    <app-inp v-model="city_residence" :placehold="'Город проживания'" :title="'Город проживания'"></app-inp>
                    <app-inp v-model="e_mail" :placehold="'Email'" :title="'Email'"></app-inp>

                </div>

                <h5 class="text-3xl font-medium pl-10 pt-10 pb-6">Основная информация</h5>
                <div class="flex flex-col space-y-6 ">
                    <div class="flex flex-row content-center items-center">
                        <h5 class="text-lg pl-10 w-3/12">Дата рождения</h5>
                        <input v-model="day_birthday" class="w-16 px-3 py-3 text-black" placeholder="День" type="text">
                        <select v-model="month_birthday" id="input_address" name="address" class="w-32 px-3 py-3 text-gray-400" type="text">
                            <option value="" selected disabled hidden>Месяц</option>
                            <option class="text-black" v-for = "(a, index) in currencyto" v-bind:value = "a.name">{{a.name}}</option>
                        </select>
                        <input v-model="year_birthday" class="w-16 px-3 py-3 text-black" placeholder="Год" type="text">
                    </div>
                    <div class="flex flex-row content-center items-center">
                        <h5 class="text-lg pl-10 w-3/12">Пол</h5>
                        <select v-model="gender" id="input_address" name="address" class="rounded-lg w-32 px-3 py-3 text-black" type="text">
                            <option>Мужской</option>
                            <option>Женский</option>
                        </select>
                    </div>
                </div>
                <h5 class="text-3xl font-medium pl-10 pt-10 pb-6">Специальность</h5>
                <div class="flex flex-col space-y-6 ">
                    <app-inp v-model="work_position" :placehold="'Желаемая должность'" :title="'Желаемая должность'"></app-inp>
                    <app-inp v-model="salary" :placehold="'Желаемая зарплата'" :title="'Желаемая зарплата'"></app-inp>
                </div>

                <h5 class="text-3xl font-medium pl-10 pt-10 pb-6">Опыт работы</h5>
                <div class="flex flex-col space-y-6 ">
                    <div class="flex flex-row content-center items-center">
                        <h5 class="text-lg pl-10 w-3/12">Ключевые навыки</h5>
                        <input v-model="skills" class="w-3/5 px-4 py-5 rounded-lg text-black" placeholder="Ключевые навыки" type="text">
                    </div>
                    <div class="flex flex-row content-center items-center">
                        <h5 class="text-lg pl-10 w-3/12">О себе</h5>
                        <textarea type="text" class="h-40 w-3/5 text-base text-black leading-none p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 rounded"></textarea>
                    </div>
                </div>

                <h5 class="text-3xl font-medium pl-10 pt-10 pb-6">Образование</h5>
                <div class="flex flex-col space-y-6 pb-10">
                    <div class="level flex flex-row content-center items-center">
                        <h5 class="text-lg pl-10 w-3/12">Уровень</h5>
                        <select v-model="level_edu" id="input_address" name="address" class="rounded-lg w-64 px-3 py-3 text-black" type="text">
                            <option class="text-black" v-for = "(a, index) in currencyfrom" v-bind:value = "a.name">{{a.name}}</option>
                        </select>
                    </div>
                </div>

                <div v-for = "(a, index) in edu_additional" v-show="level_edu == a.name">
                <h5 class="text-3xl font-medium pl-10 pt-10 pb-6">Дополнительная информация</h5>

                    <div class="flex flex-col space-y-6 pb-20">

                        <app-inp-long v-model="edu_institution" :placehold="'Учебное заведение'" :title="'Учебное заведение'"></app-inp-long>
                        <app-inp-long v-model="faculty" :placehold="'Факультет'" :title="'Факультет'"></app-inp-long>
                        <app-inp-long v-model="specialization" :placehold="'Специализация'" :title="'Специализация'"></app-inp-long>
                        <app-inp-long v-model="year_ending" :placehold="'Год окончания'" :title="'Год окончания'"></app-inp-long>

                    </div>
                </div>

            </div>

            <div class="w-1/2">
                <h5 class="text-3xl font-medium pl-10 pt-10 pb-4">Резюме</h5>

                <div class="flex flex-wrap justify-center">
                    <div class="w-8/12 sm:w-3/12 px-4">
                        <img
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Detail_of_Mulher_do_chale_verde_by_Cyprien_Eugene_Boulet.jpg/1280px-Detail_of_Mulher_do_chale_verde_by_Cyprien_Eugene_Boulet.jpg"
                            alt="..."
                            class="rounded-full max-w-full h-auto align-middle border-none"
                        />
                    </div>
                </div>


                <h5 class="text-3xl font-medium pl-10 pt-8 pb-4">Статус</h5>
                <div class="flex flex-col space-y-3 ">
                    <select v-model="status_people" id="input_address" name="address" class="mb-3 rounded-lg w-64 px-3 py-3 text-black" type="text">
                        <option value="" selected disabled hidden>Новый</option>
                        <option class="text-black" v-for = "(a, index) in status" v-bind:value = "a.name">{{a.name}}</option>
                    </select>
                </div>

                <div class="flex flex-col space-y-3">

                    <outp :name="'Имя'" :title=firstname></outp>
                    <outp :name="'Фамилия'" :title=surname></outp>

                    <div class="flex flex-row content-center items-center">
                        <h5 class="text-lg pl-10" v-if="isValid">Мобильный телефон: {{mob_phone}}</h5>
                    </div>

                    <outp :name="'Город проживания'" :title=city_residence></outp>
                    <outp :name="'Email'" :title=e_mail></outp>
                </div>
                <h5 class="text-3xl font-medium pl-10 pt-8 pb-4">Основная информация</h5>
                <div class="flex flex-col space-y-3 ">

                    <div class="flex flex-row content-center items-center">
                        <h5 class="text-lg pl-10">Дата рождения: {{day_birthday + ' ' + month_birthday + ' ' + year_birthday}}</h5>
                    </div>

                    <outp :name="'Пол'" :title=gender></outp>

                </div>
                <h5 class="text-3xl font-medium pl-10 pt-8 pb-4">Специальность</h5>
                <div class="flex flex-col space-y-3">

                    <outp :name="'Желаемая должность'" :title=work_position></outp>
                    <outp :name="'Желаемая зарплата'" :title=salary></outp>

                </div>

                <h5 class="text-3xl font-medium pl-10 pt-8 pb-4">Опыт работы</h5>
                <div class="flex flex-col space-y-3">
                    <outp :name="'Ключевые навыки'" :title=skills></outp>
                    <outp :name="'О себе'" :title=about></outp>
                </div>


                <h5 class="text-3xl font-medium pl-10 pt-8 pb-4">Образование</h5>
                <div class="flex flex-col space-y-3">
                    <outp :name="'Уровень'" :title=level_edu></outp>
                </div>


                <div v-for = "(a, index) in edu_additional" v-show="level_edu == a.name">
                    <h5 class="text-3xl font-medium pl-10 pt-8 pb-4">Дополнительная информация</h5>
                    <div class="flex flex-col space-y-3">

                        <outp :name="'Учебное заведение'" :title=edu_institution></outp>
                        <outp :name="'Факультет'" :title=faculty></outp>
                        <outp :name="'Специализация'" :title=specialization></outp>
                        <outp :name="'Год окончания'" :title=year_ending></outp>

                    </div>
                </div>

            </div>

    </form>

</div>

</body>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

<script src="vue.js"></script>
</html>