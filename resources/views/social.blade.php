<!-- Esta es una forma de hacerlo -->

{{--
@component('components.layout')
<h1>Social with "@ component"</h1>
@endcomponent
--}}

<!-- Pero también se puede hacer con la forma de las etiquetas de los componentes, donde se pone "x-nombreCompo"-->
<x-layouts.app metaDescription="Social meta-description">
    <x-slot name="title">Social</x-slot>
    <x-slot name="content">
    <h1>Social</h1>
        <p>Social page</p>
    </x-slot>
</x-layouts.app>

