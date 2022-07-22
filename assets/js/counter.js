// create a counter to count the number of items in the school's statistic div

// select elements

const counterEl = document.querySelectorAll('#number');
console.log(counterEl);
const values = [];
for (let i = 0; i < counterEl.length; i+=1) {
	values.push(parseInt(counterEl[i].innerText));
}
console.log(values);

// counter event handler
const counterFunc = (arr) => {
	const scrollDiv = document.querySelector('.school-statistics')
	scrollDiv.addEventListener('scroll', startCounter);
	if (scrollDiv.offsetHeight + scrollDiv.scrollTop <= scrollDiv.scrollHeight) {  
	    console.log('scrolled to Top')  
	  }
}