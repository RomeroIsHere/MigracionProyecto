@extends('layout.app')

@section('title','Platillos')
@section('content')
    <section
            class="font-roboto flex flex-row flex-wrap justify-center items-center h-full gap-5 p-0 py-20 bg-primary"
        >
            <div
                class="font-roboto aspect-6/8 max-h-80 bg-secondary rounded-xl border overflow-clip hover:shadow-xl hover:shadow-accent transition-shadow"
            >
                <img src="resources/Burger.jpeg" alt="Imagen del Platillo" class="h-1/2 min-w-full" />
                <span>
                    <h3>Hamburguesa Slider Simple</h3>
                    <h3>$130.0</h3>
                </span>
                <span
                    class="font-roboto flex flex-row justify-end items-center gap-3 p-3 pt-0s"
                >
                    <img
                        class="font-roboto size-5 hidden "
                        src="resources/vegan-Circle.svg"
                        alt="Vegano"
                    />
                    <img
                        class="font-roboto size-5 hidden "
                        src="resources/gluten-Circle.svg"
                        alt="Gluten"
                    />
                </span>
            </div>
            <div
                class="font-roboto aspect-6/8 max-h-80 bg-secondary rounded-xl border overflow-clip hover:shadow-xl hover:shadow-accent transition-shadow"
            >
                <img src="resources/GlutFree.webp" alt="Imagen del Platillo" class="h-1/2 min-w-full" />
                <span>
                    <h3>Hamburguesa Slider Sin gluten</h3>
                    <h3>$160.0</h3>
                </span>
                <span
                    class="font-roboto flex flex-row justify-end items-center gap-3 p-3 pt-0s"
                >
                    <img
                        class="font-roboto size-5 hidden"
                        src="resources/vegan-Circle.svg"
                        alt="Vegano"
                    />
                    <img
                        class="font-roboto size-5"
                        src="resources/gluten-Circle.svg"
                        alt="Gluten"
                    />
                </span>
            </div>
            <div
                class="font-roboto aspect-6/8 max-h-80 bg-secondary rounded-xl border overflow-clip hover:shadow-xl hover:shadow-accent transition-shadow"
            >
                <img src="resources/BasilBurger.jpg" alt="Imagen del Platillo" class="h-1/2 min-w-full" />
                <span>
                    <h3>Hamburguesa Imposible Simple</h3>
                    <h3>$180.0</h3>
                </span>
                <span
                    class="font-roboto flex flex-row justify-end items-center gap-3 p-3 pt-0s"
                >
                    <img
                        class="font-roboto size-5"
                        src="resources/vegan-Circle.svg"
                        alt="Vegano"
                    />
                    <img
                        class="font-roboto hidden size-5"
                        src="resources/gluten-Circle.svg"
                        alt="Gluten"
                    />
                </span>
            </div>
            <div
                class="font-roboto aspect-6/8 max-h-80 bg-secondary rounded-xl border overflow-clip hover:shadow-xl hover:shadow-accent transition-shadow"
            >
                <img src="resources/glutAndVeg.jpg" alt="Imagen del Platillo" class="h-1/2 min-w-full" />
                <span>
                    <h3>Hamburguesa Imposible Sin Gluten</h3>
                    <h3>$180.0</h3>
                </span>
                <span
                    class="font-roboto flex flex-row justify-end items-center gap-3 p-3 pt-0s"
                >
                    <img
                        class="font-roboto size-5"
                        src="resources/vegan-Circle.svg"
                        alt="Vegano"
                    />
                    <img
                        class="font-roboto hidden size-5"
                        src="resources/gluten-Circle.svg"
                        alt="Gluten"
                    />
                </span>
            </div>
            <div
                class="font-roboto aspect-6/8 max-h-80 bg-secondary rounded-xl border overflow-clip hover:shadow-xl hover:shadow-accent transition-shadow"
            >
                <img src="resources/Substitute.jpg" alt="Imagen del Platillo" class="h-1/2 min-w-full" />
                <span>
                    <h3>Sustituir Carne en Cualquier Hamburgues por Carne Imposible</h3>
                    <h3>+$50.0</h3>
                </span>
                <span
                    class="font-roboto flex flex-row justify-end items-center gap-3 p-3 pt-0s"
                >
                    <img
                        class="font-roboto size-5 "
                        src="resources/vegan-Circle.svg"
                        alt="Vegano"
                    />
                    <img
                        class="font-roboto hidden size-5"
                        src="resources/gluten-Circle.svg"
                        alt="Gluten"
                    />
                </span>
            </div>
            <div
                class="font-roboto aspect-6/8 max-h-80 bg-secondary rounded-xl border overflow-clip hover:shadow-xl hover:shadow-accent transition-shadow"
            >
                <img src="resources/GlutFreeBun.jpg" alt="Imagen del Platillo" class="h-1/2 min-w-full" />
                <span>
                    <h3>Sustituir Carne en Cualquier Hamburgues por Carne Imposible</h3>
                    <h3>+$30.0</h3>
                </span>
                <span
                    class="font-roboto flex flex-row justify-end items-center gap-3 p-3 pt-0s"
                >
                    <img
                        class="font-roboto size-5 hidden"
                        src="resources/vegan-Circle.svg"
                        alt="Vegano"
                    />
                    <img
                        class="font-roboto size-5"
                        src="resources/gluten-Circle.svg"
                        alt="Gluten"
                    />
                </span>
            </div>
            <div
                class="font-roboto aspect-6/8 max-h-80 bg-secondary rounded-xl border overflow-clip hover:shadow-xl hover:shadow-accent transition-shadow"
            >
            <img src="resources/OpenFacedBurger.jpg" alt="Imagen del Platillo" class="h-1/2 min-w-full" />
                <span>
                    <h3>2 Hamburguesas Imposibles Con Papas Sin Fin</h3>
                    <h3>$480.0</h3>
                </span>
                <span
                    class="font-roboto flex flex-row justify-end items-center gap-3 p-3 pt-0s"
                >
                    <img
                        class="font-roboto size-5 hidden"
                        src="resources/vegan-Circle.svg"
                        alt="Vegano"
                    />
                    <img
                        class="font-roboto hidden size-5"
                        src="resources/gluten-Circle.svg"
                        alt="Gluten"
                    />
                </span>
            </div>
            <div
                class="font-roboto aspect-6/8 max-h-80 bg-secondary rounded-xl border overflow-clip hover:shadow-xl hover:shadow-accent transition-shadow"
            >
                <img src="resources/French_friesplate.jpeg" 
                alt="Imagen del Platillo" class="h-1/2 min-w-full"/>

                <span>
                    <h3>Orden de Papas</h3>
                    <h3>$80.0</h3>
                </span>
                <span
                    class="font-roboto flex flex-row justify-end items-center gap-3 p-3 pt-0s"
                >
                    <img
                        class="font-roboto size-5"
                        src="resources/vegan-Circle.svg"
                        alt="Vegano"
                    />
                    <img
                        class="font-roboto size-5"
                        src="resources/gluten-Circle.svg"
                        alt="Gluten"
                    />
                </span>
            </div>
            <div
                class="font-roboto aspect-6/8 max-h-80 bg-secondary rounded-xl border overflow-clip hover:shadow-xl hover:shadow-accent transition-shadow"
            >
                <img src="resources/taterTots.jpg" 
                alt="Imagen del Platillo" class="h-1/2 min-w-full"/>
                
                <span>
                    <h3>Orden de Papas Tater tots</h3>
                    <h3>$85.0</h3>
                </span>
                <span
                    class="font-roboto flex flex-row justify-end items-center gap-3 p-3 pt-0s"
                >
                    <img
                        class="font-roboto size-5"
                        src="resources/vegan-Circle.svg"
                        alt="Vegano"
                    />
                    <img
                        class="font-roboto size-5 hidden"
                        src="resources/gluten-Circle.svg"
                        alt="Gluten"
                    />
                </span>
            </div>
            <div
                class="font-roboto aspect-6/8 max-h-80 bg-secondary rounded-xl border overflow-clip hover:shadow-xl hover:shadow-accent transition-shadow"
            >
                <img src="resources/Onionring.jpg" 
                alt="Imagen del Platillo" class="h-1/2 min-w-full"/>
                
                <span>
                    <h3>Orden de aros de Cebolla</h3>
                    <h3>$85.0</h3>
                </span>
                <span
                    class="font-roboto flex flex-row justify-end items-center gap-3 p-3 pt-0s"
                >
                    <img
                        class="font-roboto size-5"
                        src="resources/vegan-Circle.svg"
                        alt="Vegano"
                    />
                    <img
                        class="font-roboto size-5 hidden"
                        src="resources/gluten-Circle.svg"
                        alt="Gluten"
                    />
                </span>
            </div>
        </section>
@endsection
@section('javascript')
@endsection

@include('partial.legend')