<script lang="ts" setup>
import { AisHits } from 'vue-instantsearch/vue3/es'
</script>

<template>
  <AisHits>
    <template #default="{ items }">
      <div class="overflow-x-auto border border-gray-200 rounded-lg">
        <table class="min-w-full text-sm bg-white divide-y-2 divide-gray-200">
          <thead>
            <tr>
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">
                Name
              </th>
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">
                Company
              </th>
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">
                Email
              </th>
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">
                Phone
              </th>
            </tr>
          </thead>

          <tbody class="divide-y divide-gray-200">
            <tr v-for="contact in items">
              <td class="flex items-center gap-2 px-4 py-2 font-medium text-gray-900 whitespace-nowrap">
                <div class="w-6 h-6 overflow-hidden rounded-full">
                  <img src="https://xsgames.co/randomusers/avatar.php?g=male" class="object-cover" />
                </div>
                {{ contact.name }}
              </td>
              <td class="px-4 py-2 text-gray-700 whitespace-nowrap">
                <div class="inline-flex items-center w-6 h-6 p-1 overflow-hidden bg-gray-100 rounded">
                  <img :src="`https://logo.clearbit.com/${contact.company_url}`" alt="{{ $contact.company.name }}">
                </div>
                {{ contact.company_name }}
              </td>
              <td class="px-4 py-2 text-gray-700 whitespace-nowrap">
                {{ contact.email }}
              </td>
              <td class="px-4 py-2 text-gray-700 whitespace-nowrap">
                {{ contact.phone_number }}
              </td>
            </tr>
          </tbody>

        </table>
      </div>
    </template>
  </AisHits>
</template>
