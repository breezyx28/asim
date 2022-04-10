<div class="q-controll flex md:flex-row flex-col md border border-stone-200 w-24">
    <button wire:click.debounce.50ms="plus" type="button"
        class="plus bg-stone-800 text-white text-center w-1/3">+</button>
    <div class="input w-1/3"><input type="number" value="{{ $count }}" min="0"
            class="text-sm w-full border-none text-center"></div>
    <button wire:click.debounce.50ms="minus" type="button"
        class="minus bg-stone-800 text-white text-center w-1/3">-</button>
</div>

<style scoped>
    .q-controll {
        position: absolute;
        transform: translate(25%, -50%)
    }

    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }

</style>
