@props([
    'id',
    'content',
])
<div id="accordion-collapse" data-accordion="collapse" class="mt-5">
    <h2 id="accordion-collapse-heading-{{ $id }}">
        <button type="button"
            class="flex items-center justify-between w-full gap-3 p-5 font-medium text-white bg-gray-800 rtl:text-right"
            data-accordion-target="#accordion-collapse-body-{{ $id }}" aria-expanded="true"
            aria-controls="accordion-collapse-body-{{ $id }}">
            <span >ПРОГРАММА КУРСА ПОЛНОСТЬЮ</span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 5 5 1 1 5" />
            </svg>
        </button>
    </h2>
    <div id="accordion-collapse-body-{{ $id }}" class="hidden" aria-labelledby="accordion-collapse-heading-{{ $id }}">
        <div class="p-5 border border-b-0 border-gray-200 ">
        @include('partials.accordionbody.' . $content)
        </div>
    </div>

</div>
