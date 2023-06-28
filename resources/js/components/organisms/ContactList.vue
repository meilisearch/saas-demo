<script lang="ts" setup>
import { AisInfiniteHits, AisHighlight } from 'vue-instantsearch/vue3/es'
import { navigateToDataUrl } from '../../helpers'
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
            <tr v-for="contact in items" :data-url="`/contacts/${contact.id}`" @click="navigateToDataUrl"
              class="cursor-pointer group">
              <td
                class="flex items-center gap-2 px-4 py-2 font-medium text-gray-900 whitespace-nowrap group-hover:text-blue-600">
                <div class="w-6 h-6 overflow-hidden rounded-full">
                  <img :src="`https://api.dicebear.com/6.x/initials/svg?seed=${contact.email}`" class="object-cover" />
                </div>
                <AisHighlight :hit="contact" attribute="name" />
              </td>
              <td class="px-4 py-2 text-gray-700 whitespace-nowrap">
                <div class="inline-flex items-center w-6 h-6 p-1 overflow-hidden bg-gray-100 rounded">
                  <img :src="`https://logo.clearbit.com/${contact.company_url}`" alt="{{ contact.company_name }}">
                </div>
                <AisHighlight :hit="contact" attribute="company_name" />
              </td>
              <td class="px-4 py-2 text-gray-700 whitespace-nowrap">
                <AisHighlight :hit="contact" attribute="email" />
              </td>
              <td class="px-4 py-2 text-gray-700 whitespace-nowrap">
                <AisHighlight :hit="contact" attribute="phone_number" />
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
