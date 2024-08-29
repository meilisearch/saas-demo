<script lang="ts" setup>
import { AisInfiniteHits, AisHighlight } from 'vue-instantsearch/vue3/es'
import { navigateToDataUrl } from '../../utils';
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
            </tr>
          </thead>

          <tbody class="divide-y divide-gray-200">
            <tr v-for="company in items" class="cursor-pointer even:bg-gray-50 group"
              :data-url="`/companies/${company.id}`" @click="navigateToDataUrl">
              <td
                class="flex items-center gap-2 px-4 py-2 font-medium text-gray-900 whitespace-nowrap group-hover:text-blue-600">
                <div class="inline-flex items-center w-6 h-6 overflow-hidden bg-gray-100 rounded">
                  <img :src="`https://logo.clearbit.com/${company.url}`" :alt="company.name">
                </div>
                <AisHighlight :hit="company" attribute="name" />
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
