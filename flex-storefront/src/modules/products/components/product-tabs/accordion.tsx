import React from "react";

const Accordion: React.FC<{ title?: string }> = ({ title }) => {
  return (
    <div className="border border-gray-300 p-4 rounded-md">
      <h2 className="font-bold text-lg">{title || "Dummy Title"}</h2>
      <p>This is a placeholder for the accordion content.</p>
    </div>
  );
};

export default Accordion;