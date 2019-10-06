<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ejemplo de un componente de Vue</div>

                    <div class="card-body">
                        Se puede cambiar
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h1>Componente de Vue.js</h1>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
