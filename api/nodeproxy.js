addEventListener('fetch', event => {
  event.respondWith(handleRequest(event.request))
})

/**
 * Respond to the request
 * @param {Request} request
 */
async function handleRequest(request) {
  const params = {}
  const url = new URL(request.url)
  const queryString = url.search.slice(1).split('&')

  queryString.forEach(item => {
    const kv = item.split('=')
    if (kv[0]) params[kv[0]] = kv[1] || true
  })
  console.log(params)

  return fetch(decodeURIComponent(params.url) || "https://trnck.dev");
}
