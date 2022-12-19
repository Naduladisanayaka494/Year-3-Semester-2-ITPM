module.exports = (sequelize, Sequelize) => {
    const Counter = sequelize.define("counters", {
      name: {
        type: Sequelize.INTEGER,
      },
      enabled:{
        type: Sequelize.BOOLEAN
      },
      createdAt: {
        type: Sequelize.DATE,
        allowNull: false,
        defaultValue: Sequelize.literal('CURRENT_TIMESTAMP'),
      },
      updatedAt:{
        type: Sequelize.DATE,
        allowNull: false,
        defaultValue: Sequelize.literal('CURRENT_TIMESTAMP'),
      }
    });
  
    return Counter;
  };