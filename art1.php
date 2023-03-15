<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    


<section>
  <div class="relative mx-auto max-w-screen-xl px-4 py-8">
    <div>
      <h1 class="text-2xl font-bold lg:text-3xl">Simple Clothes Basic Tee</h1>

      <p class="mt-1 text-sm text-gray-500">SKU: #012345</p>
    </div>

    <div class="grid gap-4 lg:grid-cols-4 lg:items-start">
      <div class="lg:col-span-3">
        <div class="relative mt-4">
          <img
            alt="Tee"
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXX9zzTKr6t146CDkm2yHLRqIC1Y7DXDgUJA&usqp=CAU"
            class="h-72 w-full rounded-xl object-cover lg:h-[540px]"
          />

          <div
            class="absolute bottom-4 left-1/2 inline-flex -translate-x-1/2 items-center rounded-full bg-black/75 px-3 py-1.5 text-white"
          >
            <svg
              class="h-4 w-4"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"
              />
            </svg>

            <span class="ml-1.5 text-xs"> Hover to zoom </span>
          </div>
        </div>

        <ul class="mt-1 flex gap-1">

          <li>
            <img
              alt="Tee"
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXX9zzTKr6t146CDkm2yHLRqIC1Y7DXDgUJA&usqp=CAU"
              class="h-16 w-16 rounded-md object-cover"
            />
          </li>

          <li>
            <img
              alt="Tee"
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXX9zzTKr6t146CDkm2yHLRqIC1Y7DXDgUJA&usqp=CAU"
              class="h-16 w-16 rounded-md object-cover"
            />
          </li>
        </ul>
      </div>

      <div class="lg:sticky lg:top-0">
        <form class="space-y-4 lg:pt-8">
          <fieldset>
            <legend class="text-lg font-bold">Color</legend>

            <div class="mt-2 flex flex-wrap gap-1">
              <label for="color_green" class="cursor-pointer">
                <input
                  type="radio"
                  id="color_green"
                  name="color"
                  class="peer sr-only"
                  checked
                />

                <span
                  class="block h-6 w-6 rounded-full border border-gray-200 bg-green-700 ring-1 ring-transparent ring-offset-1 peer-checked:ring-gray-300"
                ></span>
              </label>

              <label for="color_blue" class="cursor-pointer">
                <input
                  type="radio"
                  id="color_blue"
                  name="color"
                  class="peer sr-only"
                />

                <span
                  class="block h-6 w-6 rounded-full border border-gray-200 bg-blue-700 ring-1 ring-transparent ring-offset-1 peer-checked:ring-gray-300"
                ></span>
              </label>

              <label for="color_pink" class="cursor-pointer">
                <input
                  type="radio"
                  id="color_pink"
                  name="color"
                  class="peer sr-only"
                />

                <span
                  class="block h-6 w-6 rounded-full border border-gray-200 bg-pink-700 ring-1 ring-transparent ring-offset-1 peer-checked:ring-gray-300"
                ></span>
              </label>

              <label for="color_red" class="cursor-pointer">
                <input
                  type="radio"
                  id="color_red"
                  name="color"
                  class="peer sr-only"
                />

                <span
                  class="block h-6 w-6 rounded-full border border-gray-200 bg-red-700 ring-1 ring-transparent ring-offset-1 peer-checked:ring-gray-300"
                ></span>
              </label>

              <label for="color_indigo" class="cursor-pointer">
                <input
                  type="radio"
                  id="color_indigo"
                  name="color"
                  class="peer sr-only"
                />

                <span
                  class="block h-6 w-6 rounded-full border border-gray-200 bg-indigo-700 ring-1 ring-transparent ring-offset-1 peer-checked:ring-gray-300"
                ></span>
              </label>
            </div>
          </fieldset>

          <fieldset>
            <legend class="text-lg font-bold">Material</legend>

            <div class="mt-2 flex flex-wrap gap-1">
              <label for="material_cotton" class="cursor-pointer">
                <input
                  type="radio"
                  id="material_cotton"
                  name="material"
                  class="peer sr-only"
                  checked
                />

                <span
                  class="block rounded-full border border-gray-200 px-3 py-1 text-xs peer-checked:bg-gray-100"
                >
                  Cotton
                </span>
              </label>

              <label for="material_wool" class="cursor-pointer">
                <input
                  type="radio"
                  id="material_wool"
                  name="material"
                  class="peer sr-only"
                  checked
                />

                <span
                  class="block rounded-full border border-gray-200 px-3 py-1 text-xs peer-checked:bg-gray-100"
                >
                  Wool
                </span>
              </label>
            </div>
          </fieldset>

          <div class="rounded border bg-gray-100 p-4">
            <p class="text-sm">
              <span class="block"> Pay as low as $3/mo with 0% APR. </span>

              <a href="" class="mt-1 inline-block underline"> Find out more </a>
            </p>
          </div>

          <div>
            <p class="text-xl font-bold">$19.99</p>
          </div>

          <a
  class="inline-block rounded border border-indigo-600 px-12 py-3 text-sm font-medium text-indigo-600 hover:bg-indigo-600 hover:text-white focus:outline-none focus:ring active:bg-indigo-500"
  href="add.php"
>
  Acheté
</a>
        </form>
      </div>

      <div class="lg:col-span-3">
        <div class="prose max-w-none">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam totam
            eos iusto repellat blanditiis voluptate aspernatur, quae nemo
            exercitationem cum debitis! Sint consectetur laborum tempora
            repellat odit. Impedit quasi reprehenderit harum illum sequi
            provident soluta cum quisquam odit possimus? Officia illum saepe
            magnam nostrum, officiis placeat iure itaque cumque voluptate?
          </p>
        </div>
      </div>
    </div>
  </div>
</section>


</body>
</html>