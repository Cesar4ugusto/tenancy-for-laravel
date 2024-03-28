<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('messages.pages.profile.update-language-form.title') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('messages.pages.profile.update-language-form.description') }}
        </p>
    </header>


    <form action="{{ route('language.switch') }}" method="POST">
        @csrf
        <x-input-label for="password" :value="__('messages.labels.preferred_language')" />
        <div class="grid grid-cols-2 items-center gap-4 mt-2">
            <select name="locale" id="locale" class="py-3 px-4 pe-9 block w-full border-gray-300 rounded-lg text-sm focus:border-indigo-500 focus:ring-indigo-500" onchange="this.form.submit()">
                <option value="en" {{ app()->getLocale() == 'en' ? "selected" : "" }}>English</option>
                <option value="pt" {{ app()->getLocale() == 'pt' ? "selected" : "" }}>Português</option>
            </select>
            @if (session('status') === 'language-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">{{ __('messages.pages.profile.update-language-form.response.success') }}</p>
            @endif
        </div>
        <x-input-error :messages="$errors->get('locale')" class="mt-2" />
    </form>

</section>
