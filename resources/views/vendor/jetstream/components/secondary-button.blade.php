<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-white border-2 border-indigo-300 rounded-md font-semibold text-xs text-indigo-700 uppercase tracking-widest shadow-sm hover:text-indigo-500 focus:outline-none focus:bg-indigo-700 focus:text-white active:text-indigo-800 active:bg-indigo-50 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
