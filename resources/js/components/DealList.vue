<script lang="ts" setup>
import { AisInfiniteHits, AisHighlight } from 'vue-instantsearch/vue3/es'
</script>

<template>
  <AisInfiniteHits>
    <template #default="{
      items,
      refineNext,
      isLastPage,
    }">
      <div class="overflow-x-auto border border-gray-200 rounded-lg">
        <table class="min-w-full text-sm bg-white divide-y-2 divide-gray-200">
          <thead>
            <tr>
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">
                Company
              </th>
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">
                Prospect
              </th>
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">
                Value
              </th>
            </tr>
          </thead>

          <tbody class="divide-y divide-gray-200">
            <tr v-for="deal in items" class="even:bg-gray-50">
              <td class="items-center px-4 py-2 font-medium text-gray-900 whitespace-nowrap">
                <div class="inline-flex items-center gap-2">
                  <div class="inline-flex items-center w-6 h-6 p-1 overflow-hidden bg-gray-100 rounded">
                    <img :src="`https://logo.clearbit.com/${deal.company_url}`" alt="{{ deal.company_name }}">
                  </div>
                  <AisHighlight :hit="deal" attribute="company_name" />
                </div>
              </td>
              <td class="flex items-center gap-2 px-4 py-2 text-gray-700 whitespace-nowrap">
                <div class="w-6 h-6 overflow-hidden rounded-full">
                  <img :src="`https://api.dicebear.com/6.x/initials/svg?seed=${deal.contact_email}`"
                    class="object-cover" />
                </div>
                <AisHighlight :hit="deal" attribute="contact_name" />
              </td>
              <td class="px-4 py-2 text-right text-gray-700 whitespace-nowrap">
                {{ new Intl.NumberFormat('en-US', {
                  style: 'currency', currency: 'USD',
                }).format(deal.value) }}
              </td>
            </tr>
          </tbody>

        </table>
      </div>

      <div class="flex mt-12 ">
        <button v-if="!isLastPage" @click="refineNext"
          class="px-12 py-3 mx-auto text-sm font-medium text-indigo-600 border border-indigo-600 rounded hover:bg-indigo-600 hover:text-white focus:outline-none focus:ring active:bg-indigo-500">
          Load more
        </button>
      </div>
    </template>
  </AisInfiniteHits>
</template>
