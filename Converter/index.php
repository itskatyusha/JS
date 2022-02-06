<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="font-body bg-gray-800">

<div class="">
    <div class="w-full">
        <div class="m-auto w-max">
            <a class="flex flex-row items-center content-center" href="">
                <div class="flex items-center h-20">
                    <div class="text-gray-100 text-5xl font-bold">
                        Unit converter
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<form id = "databinding"  class="container mx-auto w-full max-w-lg">
    <div class="flex items-center mt-2">
        <div class="flex-row md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2">
                From
            </label>
            <input v-model.number = "amount" class="appearance-none block w-full text-gray-100 border text-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="">
        </div>
        <div class="flex-row md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2">
                To
            </label>
            <output class="bg-white appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text">{{finalamount}}</output>
        </div>
    </div>
    </div>
    <div class="flex flex-wrap mt-4">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2">
                UNIT
            </label>
            <div class="relative">
                <select v-model = "convertfrom" class="block appearance-none w-full border border-gray-200 text-gray-500 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <option v-for = "(a, index) in currencyfrom"  v-bind:value = "a.name">{{a.name}}</option>
                </select>
            </div>
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-100 text-xs font-bold mb-2" for="grid-state">
                UNIT
            </label>
            <div class="relative">
                <select v-model = "convertto" class="block appearance-none w-full border border-gray-200 text-gray-500 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <option v-for = "(a, index) in currencyto" v-bind:value = "a.name">{{a.name}}</option>
                </select>
            </div>
        </div>
    </div>
</form>

</body>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

<script src="vue.js"></script>

</html>