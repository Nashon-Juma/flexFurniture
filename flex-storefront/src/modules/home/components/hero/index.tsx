"use client";

import React, { useState, useEffect } from "react";
import { motion } from "framer-motion";

const Hero = () => {
  const [slideIndex, setSlideIndex] = useState(0);

  const slides = [
    {
      title: "Discover Exclusive Deals",
      subtitle: " ",
      buttonText: "Explore Now",
      backgroundImage: "https://via.placeholder.com/1920x1080/6a64f1/ffffff?text=1",
    },
    {
      title: "Premium Quality Products",
      subtitle: " ",
      buttonText: "Browse Collection",
      backgroundImage: "https://via.placeholder.com/1920x1080/fad02e/ffffff?text=2",
    },
    {
      title: "Unbeatable Prices",
      subtitle: " ",
      buttonText: "Start Shopping",
      backgroundImage: "https://via.placeholder.com/1920x1080/efefef/333333?text=3",
    },
  ];

  useEffect(() => {
    const interval = setInterval(() => {
      setSlideIndex((prevIndex) => (prevIndex + 1) % slides.length);
    }, 5000); // Change slide every 5 seconds

    return () => clearInterval(interval); // Clear interval on component unmount
  }, [slides.length]); // Add slides.length to dependencies

  return (
    <section className="bg-gradient-to-r from-purple-400 via-pink-500 to-indigo-600">
      <motion.div className="relative overflow-hidden min-h-screen">
        <div
          className="absolute inset-0 bg-cover bg-center transition-transform duration-700"
          style={{ backgroundImage: `url(${slides[slideIndex].backgroundImage})` }}
        ></div>

        <div className="absolute inset-0 flex flex-col items-center justify-center text-center p-8">
          <motion.h1
            className="text-5xl md:text-6xl font-bold text-white leading-tight drop-shadow-lg"
            initial={{ opacity: 0 }}
            animate={{ opacity: 1 }}
            exit={{ opacity: 0 }}
            transition={{ duration: 1 }}
          >
            {slides[slideIndex].title}
          </motion.h1>

          <motion.p
            className="mt-4 text-xl md:text-2xl text-gray-200 leading-relaxed drop-shadow-md"
            initial={{ opacity: 0 }}
            animate={{ opacity: 1 }}
            exit={{ opacity: 0 }}
            transition={{ duration: 1 }}
          >
            {slides[slideIndex].subtitle}
          </motion.p>

          <motion.button
            className="mt-8 px-8 py-3 rounded-full bg-white text-purple-800 hover:bg-opacity-80 transition-colors duration-300 shadow-lg"
            initial={{ opacity: 0 }}
            animate={{ opacity: 1 }}
            exit={{ opacity: 0 }}
            transition={{ duration: 1 }}
          >
            {slides[slideIndex].buttonText}
          </motion.button>
        </div>

        {/* Navigation buttons */}
        <button
          onClick={() => setSlideIndex((slideIndex - 1 + slides.length) % slides.length)}
          className="absolute top-1/2 left-4 transform -translate-y-1/2 bg-white rounded-full p-2 shadow-lg hover:bg-gray-200 transition duration-300"
          aria-label="Previous Slide"
        >
          &lt;
        </button>
        <button
          onClick={() => setSlideIndex((slideIndex + 1) % slides.length)}
          className="absolute top-1/2 right-4 transform -translate-y-1/2 bg-white rounded-full p-2 shadow-lg hover:bg-gray-200 transition duration-300"
          aria-label="Next Slide"
        >
          &gt;
        </button>
      </motion.div>
    </section>
  );
};

export default Hero;