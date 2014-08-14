/**
 * using of LocalStorage with supporting for older browser what not support it
 * @param {type} e
 * @returns {DOMString}
 */
function getLocalStorage(e) {
	return window.localStorage ? localStorage.getItem(e) : $.cookie(e)
}

function setLocalStorage(e, t) {
	window.localStorage ? localStorage.setItem(e, t) : $.cookie(e, t, {
		path: "/"
	})
}

function removeLocalStorage(e) {
	window.localStorage ? localStorage.removeItem(e) : $.cookie(e, null)
}