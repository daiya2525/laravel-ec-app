<x-tests.app>
    <x-slot name='header'>
        <p class="dark:text-white">ヘッダー2</p>
    </x-slot>
    <p class="dark:text-white">コンポーネントテスト2</p>
    <div class="mb-4"></div>

    <x-test-class-base classBaseMessage="メッセージです"/>
    <div class="mb-4"></div>
    <x-test-class-base classBaseMessage="メッセージです" defaultMessage="初期値から変更しています"/>
</x-tests.app>