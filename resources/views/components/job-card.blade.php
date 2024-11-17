<x-panel class="flex-col">
    <div class="self-start text-sm">Employer Name</div>

    <div class="py-8 text-center space-y-6">
        <h3 class="group-hover:text-blue-600 text-xl font-bold transition-colors duration-300">Job Title</h3>
        <p class="text-sm my-4">Full Time - From $60,000</p>
    </div>

    <div class="flex justify-between items-end mt-auto">
        <div>
            <x-tag size="small">Frontend</x-tag>
            <x-tag size="small">Backend</x-tag>
            <x-tag size="small">Devops</x-tag>
        </div>

        <x-employer-logo :width="42" />
    </div>
</x-panel>
